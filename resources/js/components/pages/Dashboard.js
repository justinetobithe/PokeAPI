import React, { useContext, useEffect } from 'react'
import { useFetch } from '../../api'
import { AppContext } from '../../store'

export default function Dashboard() {

    const { state, dispatch } = useContext(AppContext)

    const { data, loading } = useFetch({
        url: "/api/pokemon-order-by-id"
    })

    const pokemonType = useFetch({
        url: "/api/get-pokemon-type"
    })

    useEffect(() => {
        dispatch({ type: "TOGGLE_LOADING", payload: loading })
    }, [loading])

    return (
        <>
            <div className="container-fluid">
                <div className="row">
                    {
                        data.map(pokemons => (
                            <div className="col-12 col-md-3 col-lg-4 col-xl-4" key={pokemons.id}>
                                <div className="card shadow mb-4">
                                    <div className="card-header" style={{ backgroundColor: "#f2f2f2" }}>
                                        {
                                            pokemons.image != null ?
                                                <img className="img-fluid" src={pokemons.image} />
                                                :
                                                <img className="img-fluid" src="/storage/pokemons/pokeball.png" />
                                        }
                                    </div>
                                    <div className="card-body h-50">
                                        <p style={{ color: '#919191', fontSize: '80%', paddingTop: '2px' }}>
                                            <span className="number-prefix">#</span>{pokemons.pokemon_id}
                                        </p>
                                        <h5 style={{ color: '#313131', textTransform: 'none', fontSize: '145%', marginBottom: '5px' }}>{pokemons.name}</h5>
                                        <div className="d-flex align-items-center">
                                            {
                                                pokemonType.data.filter((item) => {
                                                    if (JSON.stringify(pokemons.type).includes(item.name_type)) {
                                                        return item;
                                                    }
                                                }).map(item => (
                                                    <span key={item.id} className="badge" style={{ backgroundColor: "#fff", color: item.color }}>{item.name_type}</span>
                                                ))
                                            }

                                        </div>
                                    </div>
                                </div>
                            </div>
                        ))
                    }

                </div>
            </div>
        </>
    )
}
