import axios from 'axios';
import React, { useContext } from 'react'
import { NavLink, useHistory } from 'react-router-dom'
import { AppContext } from '../store'
import LogoutModal from './modal/LogoutModal';

export default function Layout({ children }) {

    const { state, dispatch } = useContext(AppContext)
    let history = useHistory();

    const handleLogout = (e) => {
        e.preventDefault();
        axios.get("/sanctum/csrf-cookie").then(() => {
            axios.post('/logout').then(() => {
                dispatch({
                    type: "AUTHENTICATION",
                    payload: {}
                });

                history.push("/")
            })
        })
    }

    return (
        <>
            <ul className="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                <a className="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                    <img src="/img/pokemon-logo.png" className="img-fluid" width={50} />
                    <div className="sidebar-brand-text mx-3">Poke API</div>
                </a>
                <hr className="sidebar-divider my-0" />
                <li className="nav-item active">
                    <NavLink className="nav-link" to="/">
                        <i className="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></NavLink>
                </li>
                <hr className="sidebar-divider" />
                <div className="sidebar-heading">
                    Interface
                </div>
                <li className="nav-item">
                    <a className="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePokemon"
                        aria-expanded="true" aria-controls="collapsePokemon">
                        <i className="fas fa-fw fa-cog"></i>
                        <span>Pokemon</span>
                    </a>
                    <div id="collapsePokemon" className="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div className="py-2 collapse-inner rounded">
                            <NavLink className="collapse-item" to="/pokemon/view">View Pokemon</NavLink>
                            <NavLink className="collapse-item" to="/pokemon/add">Add Pokemon</NavLink>
                        </div>
                    </div>
                </li>
                <li className="nav-item">
                    <a className="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePokemonType"
                        aria-expanded="true" aria-controls="collapsePokemonType">
                        <i className="fas fa-fw fa-cog"></i>
                        <span>Types of Pokemon</span>
                    </a>
                    <div id="collapsePokemonType" className="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div className="py-2 collapse-inner rounded">
                            <NavLink className="collapse-item" to="/pokemon-type/view">View Types of Pokemon</NavLink>
                            <NavLink className="collapse-item" to="/pokemon-type/add">Add Types of Pokemon</NavLink>
                        </div>
                    </div>
                </li>
            </ul>

            <div id="content-wrapper" className="d-flex flex-column">
                <div id="content">
                    <nav className="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <button id="sidebarToggleTop" className="btn btn-link rounded-circle mr-3">
                            <i className="fa fa-bars" ></i>
                        </button>

                        <ul className="navbar-nav ml-auto">

                            <li className="nav-item dropdown no-arrow">
                                <a className="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span className="mr-2 d-none d-lg-inline text-gray-600 small">{state.user.name}</span>
                                    <img className="img-profile rounded-circle" src={state.user.image != null ? state.user.image : "/img/undraw_profile.svg"} />
                                </a>
                                <div className="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a className="dropdown-item" onClick={handleLogout}>
                                        <i className="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    {children}
                </div>

                <footer className="sticky-footer bg-white">
                    <div className="container my-auto">
                        <div className="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2021</span>
                        </div>
                    </div>
                </footer>

            </div>

        </>
    )
}
