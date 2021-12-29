import React, { useContext, useEffect, useState } from 'react'
import DataTable from 'react-data-table-component'
import { useFetch } from '../../api'
import { AppContext } from '../../store';



export default function ViewPokemons() {

    const { state, dispatch } = useContext(AppContext)

    const [filterName, setFilterName] = useState(null);

    const [pagination, setPagination] = useState({
        currentPage: 1,
        totalRows: 0,
        perPage: 10
    })

    const { data, loading } = useFetch({
        url: `/api/get-pokemons?paginate=true&page=${pagination.currentPage}&per_page=${pagination.perPage}`
    })

    const FilterComponent = ({ filterText, onFilter, onClear }) => (
        <>
            <div className="row d-flex justify-content-left mt-4 mb-4">
                <div className="col-md-4">
                    <div className="search">
                        <i className="fa fa-search"></i>
                        <input
                            type="text"
                            className="form-control"
                            placeholder="Search By Name"
                            value={filterText}
                            onChange={onFilter} />
                    </div>
                </div>
            </div>
        </>
    )


    const pokemonType = useFetch({
        url: "/api/get-pokemon-type"
    })

    useEffect(() => {
        if (isset(data.data)) {
            setPagination((state) => ({
                ...state,
                totalRows: data.total,
                perPage: data.per_page
            }))
        }
    }, [data])

    useEffect(() => {
        dispatch({ type: "FETCH_POKEMONS", payload: data })
    }, [data])

    useEffect(() => {
        dispatch({ type: "TOGGLE_LOADING", payload: loading })
    }, [loading])


    const columns = [
        { name: "No.", selector: (row) => row.id, sortable: true },
        { name: "Dex", selector: (row) => "#" + row.pokemon_id, sortable: true },
        { name: "Image", selector: (row) => row.image },
        { name: "Name", selector: (row) => row.name, sortable: true },
        {
            name: "Type", selector: (row) =>
                pokemonType.data.filter((item) => {
                    if (JSON.stringify(row.type).includes(item.name_type)) {
                        return item;
                    }
                }).map(item => (
                    item.name_type
                )).join(","), sortable: true
        },
        {
            name: "Action", selector: (row) => (
                <div className="d-flex align-items-center">
                    <button className="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i>
                    </button>
                    <button className="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                </div>
            )
        }
    ]

    return (
        <>
            <div className="container-fluid">
                <div className="row">
                    <div className="col-12">
                        <div className="card shadow mb-4">
                            <div className="card-header">
                                <h6 className="m-0 font-weight-bold text-primary">List of Pokemons</h6>
                                <FilterComponent />
                            </div>
                            <div className="card-body">
                                <div className="table-responsive">
                                    <DataTable
                                        className="table table-bordered"
                                        columns={columns}
                                        data={state.pokemons.data}
                                        fixedHeader
                                        fixedHeaderScrollHeight="100%"
                                        progressPending={loading}
                                        highlightOnHover
                                        pointerOnHover
                                        allowOverflow={true}
                                        pagination={true}
                                        paginationServer
                                        paginationTotalRows={pagination.totalRows}
                                        onChangeRowsPerPage={(perPage, page) => {
                                            setPagination((state) => ({
                                                ...state,
                                                currentPage: page,
                                                perPage: perPage
                                            }))
                                        }}
                                        onChangePage={(page) => {
                                            setPagination((state) => ({
                                                ...state,
                                                currentPage: page
                                            }))
                                        }}
                                        selectableRowsVisibleOnly
                                        customStyles={{
                                            headCells: {
                                                style: {
                                                    fontSize: "16px",
                                                    color: "#858796",
                                                    fontWeight: "bold",
                                                    borderBottomWidth: "2px"
                                                    // border-bottom-width: 2px;
                                                }
                                            },
                                            cells: {
                                                style: {
                                                    fontSize: "16px",
                                                    color: "#858796",
                                                }
                                            }
                                        }}
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    )
}
