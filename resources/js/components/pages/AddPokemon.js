import React, { useContext, useEffect, useState } from 'react'
import { useFetch, useHttpRequest } from '../../api';
import { AppContext } from '../../store'
import Select from 'react-select'
import { useForm } from 'react-hook-form';
import { notify } from '../Element';
import { useHistory } from 'react-router-dom';
import Swal from 'sweetalert2';

export default function AddPokemon() {

    let history = useHistory();

    const { state, dispatch } = useContext(AppContext);

    const [selectedImage, setSelectedImage] = useState();
    const [preview, setPreview] = useState();
    const [selectedType, setSelectedType] = useState();

    const {
        register,
        handleSubmit,
        formState: { errors }
    } = useForm();

    const { data, loading } = useFetch({
        url: "/api/get-pokemon-type"
    })

    useEffect(() => {
        dispatch({ type: "TOGGLE_LOADING", payload: loading })
    }, [loading])


    useEffect(() => {
        if (!selectedImage) {
            setPreview(selectedImage)
            return
        }
        const objectUrl = URL.createObjectURL(selectedImage)
        setPreview(objectUrl)

        return () => URL.revokeObjectURL(objectUrl);
    }, [selectedImage])

    const onSelectImage = e => {
        if (!e.target.files || e.target.files.length === 0) {
            setSelectedImage(undefined)
            return
        }

        setSelectedImage(e.target.files[0]);
    }


    const [response, httpRequest] = useHttpRequest(data => ({
        url: "/insert-pokemon",
        method: "POST",
        data,
        header: { "Content-Type": "application/json" }
    }))

    useEffect(() => {
        dispatch({ type: "TOGGLE_LOADING", payload: response.loading })

        if (response.error.length || response.data !== null) {
            notify(
                response.error.length ? response.error : response.data.message,
                response.data.status ? "sucess" : "error"
            )

            if (response.data.status) {
                history.push("/pokemon/view")
            }
        }
    }, [response])

    const onSubmit = data => {
        if (selectedType == undefined) {
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "Pokemon type is required!"
            })
        } else {
            Swal.fire({
                title: "Are you sure you want to save this data?",
                icon: "info",
                showCancelButton: true,
                confirmButtonColor: "#e74a3b",
                cancelButtonColor: "#4e73df",
                confirmButtonText: "Ok"
            }).then((result) => {
                if (result.isConfirmed) {
                    let fd = new FormData();
                    fd.append("pokemon_id", data.pokemon_id);
                    fd.append("image", selectedImage);
                    fd.append("name", data.name);
                    fd.append("type", selectedType != null ? JSON.stringify(selectedType.map(pokemonType => pokemonType.value)) : "");

                    httpRequest(fd);
                }
            })
        }
    }

    return (
        <>
            <div className="container-fluid">
                <div className="row">
                    <div className="col-12">
                        <div className="card shadow mb-4">
                            <div className="card-header">
                                <h6 className="m-0 font-weight-bold text-primary">Add Pokemon</h6>
                            </div>
                            <div className="card-body">
                                <form onSubmit={handleSubmit(onSubmit)}>
                                    <div className="mb-3 row">
                                        <label className="col-sm-2 col-form-label">Image</label>
                                        <div className="col-sm-6">
                                            <div className="display-image mb-2">
                                                {
                                                    selectedImage &&
                                                    <img className="img-fluid" src={preview} alt="..." />
                                                }
                                            </div>
                                            <input
                                                type="file"
                                                className="form-control-plaintext"
                                                placeholder="Select Image"
                                                accept="image/png, image/jpeg"
                                                defaultValue={selectedImage}
                                                onChange={onSelectImage}
                                            />
                                        </div>
                                    </div>
                                    <div className="mb-3 row">
                                        <label className="col-sm-2 col-form-label">Pokemon Identity</label>
                                        <div className="col-sm-6">
                                            <input
                                                type="number"
                                                className="form-control"
                                                {...register("pokemon_id", { required: true })}
                                            />
                                            {
                                                errors.pokemon_id && (
                                                    <span className="text-danger">This field is required</span>
                                                )
                                            }
                                        </div>
                                    </div>
                                    <div className="mb-3 row">
                                        <label className="col-sm-2 col-form-label">Name</label>
                                        <div className="col-sm-6">
                                            <input
                                                type="text"
                                                className="form-control"
                                                {...register("name", { required: true })}
                                            />
                                            {
                                                errors.name && (
                                                    <span className="text-danger">This field is required</span>
                                                )
                                            }
                                        </div>
                                    </div>
                                    <div className="mb-3 row">
                                        <label className="col-sm-2 col-form-label">Type</label>
                                        <div className="col-sm-6">
                                            <Select
                                                options={data.map(type => ({
                                                    value: type.name_type,
                                                    label: type.name_type,
                                                }))}
                                                placeholder="Select Type"
                                                isClearable
                                                isMulti
                                                defaultValue={selectedType}
                                                onChange={setSelectedType}
                                            />
                                        </div>
                                    </div>
                                    <div className="mb-3 row">
                                        <label className="col-sm-2 col-form-label"></label>
                                        <button type="submit" className="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    )
}
