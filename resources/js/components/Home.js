import React, { Component } from "react";
import ReactDOM from "react-dom";
import {
    Table,
    Button,
    Modal,
    ModalHeader,
    ModalBody,
    ModalFooter,
    FormGroup,
} from "react-bootstrap";
import axios from "axios";
// import Addgamemodal from "./newGameModal";

export default class Reacthome extends Component {
    constructor() {
        super();
        this.state = {
            games: [],

            // updateGameData: {
            //     id: "",
            //     gameName: "",
            //     gameDesc: "",
            //     gameGenre: "",
            // },
            // updateGameModal: false,
        };
    }

    loadGame() {
        axios.get("http://127.0.0.1:8000/api/gameDetails").then((response) => {
            this.setState({
                games: response.data,
            });
        });
    }

    componentWillMount() {
        this.loadGame();
    }

    render() {
        // let games = this.state.games.map((game) => {
        return (
            <div>
                Hello
                {/* {game.id} */}
            </div>
        );
        // }
        // );
    }
}

if (document.getElementById("reacthome")) {
    ReactDOM.render(<Reacthome />, document.getElementById("reacthome"));
}
