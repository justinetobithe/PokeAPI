export default function (state, { type, payload }) {
    switch (type) {
        case "TOGGLE_LOADING":
            return {
                ...state,
                loading: payload
            }

        case "TOGGLE_MODAL":
            return {
                ...state,
                modal: payload
            }

        case "AUTHENTICATION":
            return {
                ...state,
                user: payload
            }

        // Pokemon

        case "FETCH_POKEMONS":
            return {
                ...state,
                pokemons: payload
            }
        case "UPDATE_POKEMONS":
            let pokemons = state.pokemons;
            let pokemonIndex = pokemons.findIndex(
                (pokemon) => pokemon.id == payload.id
            )
            pokemons[pokemonIndex] = payload;
            return {
                ...state,
                pokemons: pokemons
            }
        case "DELETE POKEMONS":
            return {
                ...state,
                pokemons: state.pokemons.filter(item => item.id != payload.id)
            }
    }
}