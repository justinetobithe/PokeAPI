import React, { useContext, useEffect } from 'react'
import { useForm } from 'react-hook-form'
import { useHttpRequest } from '../../api';
import { AppContext } from '../../store'
import { notify } from '../Element';

export default function Login() {

    const { state, dispatch } = useContext(AppContext)

    const {
        register,
        handleSubmit,
        formState: { errors }
    } = useForm();

    const [response, handleHttpRequest] = useHttpRequest((data) => ({
        url: "/login",
        method: "POST",
        data,
        header: { "Content-Type:": "application/json" }
    }))

    useEffect(() => {
        dispatch({ type: "TOGGLE_LOADING", payload: response.loading })

        if (response.error.length || response.data !== null) {
            notify(
                response.error.length ? response.error : response.data.message,
                response.data.status ? "success" : "error"
            )

            if (response.data.status) {
                dispatch({
                    type: "AUTHENTICATION",
                    payload: response.data.user
                })
            }
        }
    }, [response])

    const onSubmit = (formData) => {
        let data = new FormData();
        for (let key in formData) {
            data.append(key, formData[key]);
        }

        handleHttpRequest(data);
    }

    return (
        <>
            <div className="container mt-5">
                <div className="row justify-content-center">
                    <div className="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                        <div className="card o-hidden border-0 shadow-lg my-5">
                            <div className="card-body p-0">
                                <div className="p-5 w-100">
                                    <div className="text-center">
                                        <h1 className="h4 text-gray-900 mb-4">Poke API</h1>
                                    </div>
                                    <form className="user" onSubmit={handleSubmit(onSubmit)}>
                                        <div className="form-group">
                                            <input type="email"
                                                className="form-control form-control-user"
                                                placeholder="name@example.com"
                                                {...register("email", { required: true })}
                                            />
                                            {
                                                errors.email && (
                                                    <span className="small text-danger">This field is required</span>
                                                )
                                            }
                                        </div>
                                        <div className="form-group">
                                            <input type="password"
                                                className="form-control form-control-user"
                                                placeholder="Password"
                                                {...register("password", { required: true })}
                                            />
                                            {
                                                errors.password && (
                                                    <span className="small text-danger">This field is required</span>
                                                )
                                            }
                                        </div>
                                        <div className="form-group">
                                            <div className="custom-control custom-checkbox small">
                                                <input type="checkbox" className="custom-control-input" id="customCheck" />
                                                <label className="custom-control-label" htmlFor="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button className="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr />
                                    <div className="text-center">
                                        <a className="small" href="#">Forgot Password?</a>
                                    </div>
                                    <div className="text-center">
                                        <a className="small" href="#">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div >
        </>
    )
}
