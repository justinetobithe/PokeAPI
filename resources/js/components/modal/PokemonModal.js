import React, { useContext, useEffect, useState } from 'react'
import { useForm } from 'react-hook-form'
import Swal from 'sweetalert2';
import { useHttpRequest } from '../../api';
import { AppContext } from '../../store'
import { notify } from '../Element';

export default function PokemonModal() {


    const { state, dispatch } = useContext(AppContext)

    const [selectedImage, setSelectedImage] = useState();
    const [preview, setPreview] = useState();
    const [selectedType, setSelectedType] = useState(
        isset(state.modal.data)?
        
    )

    const {
        register,
        handleSubmit,
        formState: { errors }
    } = useForm();

    const [response, handleHttpRequest] = useHttpRequest((id, data) => ({
        url: `/api/pokemon/${id}`,
        method: "POST",
        data,
        header: { "Content-Type": "application/json" }
    }))

    useEffect(() => {
        dispatch({ type: "TOGGLE_LOADING", payload: response.loading })

        if (response.error.length || response.data !== null) {
            notify(
                response.error.length ? response.error : response.data.message,
                response.data.status ? "success" : "error"
            )

            if (response.data.status) {
                dispatch({ type: "UPDATE_POKEMON", payload: response.data.payload })
            }

            closeModal();
        }
    })

    const onSubmit = (formData) => {
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

                handleHttpRequest(state.modal.data.id, fd);
            }
        })
    }

    const closeModal = () => {
        dispatch({
            type: "TOGGLE_MODAL",
            payload: {
                isShown: false,
                heading: "",
                footer: "",
                onHide: () => { }
            }
        })
    }

    return (
        <>
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
                            defaultValue={state.pokemon}
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
        </>
    )
}
