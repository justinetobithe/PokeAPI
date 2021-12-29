import React, { useEffect, useReducer } from 'react'
import { BrowserRouter as Router, Switch } from 'react-router-dom';
import { useHistory } from 'react-router-dom'
import reducer from '../reducer';
import { AppContext, initialState } from '../store';
import AuthRoute from './AuthRoute';
import { LoadingOverlay } from './Element';
import GuestRoute from './GuestRoute';
import AddPokemon from './pages/AddPokemon';
import AddPokemonType from './pages/AddPokemonType';
import Dashboard from './pages/Dashboard';
import Login from './pages/Login';
import ViewPokemons from './pages/ViewPokemons';
import ViewPokemonType from './pages/ViewPokemonType';


export default function App() {

    let history = useHistory();
    const [state, dispatch] = useReducer(reducer, initialState)

    useEffect(() => {
        if (isset(AUTH_USER.id)) {
            dispatch({
                type: "AUTHENTICATION",
                payload: AUTH_USER
            })
        }
    }, [])

    return (
        <AppContext.Provider value={{ state, dispatch }}>
            <LoadingOverlay loading={state.loading} />
            <Router history={history}>
                <Switch>
                    {isset(state.user.id) ? (
                        <AuthRoute exact path="/" component={Dashboard} />
                    ) : (
                        <GuestRoute exact path="/" component={Login} />
                    )}

                    <AuthRoute path="/pokemon/view" component={ViewPokemons} />
                    <AuthRoute path="/pokemon/add" component={AddPokemon} />
                    <AuthRoute path="/pokemon-type/view" component={ViewPokemonType} />
                    <AuthRoute path="/pokemon-type/add" component={AddPokemonType} />
                </Switch>
            </Router>
        </AppContext.Provider>
    )
}
