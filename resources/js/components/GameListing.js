import React, { Component } from "react";
import ReactDOM, { render } from "react-dom";
import "bootstrap/dist/css/bootstrap.min.css";
import Image from "react-bootstrap/Image";
import {
    Button,
    Carousel,
    Container,
    Row,
    Col,
    Card,
    ListGroup,
    Table,
} from "react-bootstrap";
import axios from "axios";

export default class GameListing extends Component {
    constructor() {
        super();
        this.state = {
            games: [],
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
        let games = this.state.games.map((game) => {
            return (
                <tr key={game.id}>
                    <td>{game.id}</td>
                    <td>{game.gameName}</td>
                    <td>{game.gameDesc}</td>
                    {/* <td>
                        <Button
                            color="success"
                            size="sm"
                            outline
                            onClick={this.callUpdatePost.bind(
                                this,
                                game.id,
                                game.title,
                                game.content,
                                game.user_id
                            )}
                        >
                            Edit
                        </Button>
                        <Button
                            color="danger"
                            size="sm"
                            outline
                            onClick={this.deletePost.bind(this, post.id)}
                        >
                            Delete
                        </Button>
                    </td> */}
                </tr>
            );
        });

        return (
            <div className="container">
                <Table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>{games}</tbody>
                </Table>
            </div>
        );
    }
}

if (document.getElementById("gameListing")) {
    ReactDOM.render(<GameListing />, document.getElementById("gameListing"));
}
