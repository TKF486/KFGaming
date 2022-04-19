// Refer: https://appdividend.com/2022/03/12/react-bootstrap-modal/

import React, { Component, useState } from "react";
import ReactDOM, { render } from "react-dom";
import "bootstrap/dist/css/bootstrap.min.css";
import {
    Button,
    Image,
    Form,
    Carousel,
    Container,
    Row,
    Col,
    Card,
    ListGroup,
    Table,
    Modal,
} from "react-bootstrap";
// import {
//     Table,
//     Button,
//     Modal,
//     ModalHeader,
//     ModalBody,
//     ModalFooter,
//     Input,
//     FormGroup,
//     Label,
// } from "reactstrap";
import axios from "axios";

export default class CheckoutModal extends Component {
    constructor(props) {
        super(props);

        this.state = {
            games: [],
            newGameModal: false,
            newGameData: {
                gameId: "",
                userId: "",
                creditCard: "",
                address: "",
            }, // initial state for Post data
        };

        this.toggle = this.toggle.bind(this);
        this.handleChangeGameId = this.handleChangeGameId.bind(this);
        this.handleChangeUserId = this.handleChangeUserId.bind(this);
        this.handleChangeCreditCard = this.handleChangeCreditCard.bind(this);
        this.handleChangeAdress = this.handleChangeAdress.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
    }

    toggle() {
        this.setState({
            newGameModal: !this.state.newGameModal,
        });
    }
    handleChangeGameId(event) {
        this.setState({ gameId: event.target.value });
    }
    handleChangeUserId(event) {
        this.setState({ userId: event.target.value });
    }
    handleChangeCreditCard(event) {
        this.setState({ creditCard: event.target.value });
    }

    handleChangeAdress(event) {
        this.setState({ address: event.target.value });
    }

    handleSubmit(event) {
        event.preventDefault();
        const form = {
            gameId: this.state.gameId,
            userId: this.state.userId,
            creditCard: this.state.creditCard,
            address: this.state.address,
        };
        let uri = "http://localhost:8000/api/game";
        axios.post(uri, form).then((response) => {
            this.setState({
                newGameModal: !this.state.newGameModal,
            });
        });
    }

    render() {
        return (
            <div>
                <Button
                    onClick={this.toggle}
                    className="col btn btn-green-moon"
                >
                    Checkout
                </Button>

                <Modal isOpen={this.state.newGameModal}>
                    <Modal.Header>
                        <Modal.Title>Modal heading</Modal.Title>
                    </Modal.Header>
                    <Modal.Body>
                        <Form onSubmit={this.handleSubmit}>
                            <Form.Group
                                className="mb-3"
                                controlId="exampleForm.ControlInput1"
                            >
                                <Form.Label>Credit Card</Form.Label>
                                <input
                                    id="creditCard"
                                    value={this.state.creditCard}
                                    placeholder="5555555555554444"
                                    autoFocus
                                    onChange={this.handleChangeCreditCard}
                                    className="form-control"
                                />
                            </Form.Group>
                            <Form.Group
                                className="mb-3"
                                controlId="exampleForm.ControlTextarea1"
                            >
                                <Form.Label>Address</Form.Label>
                                <input
                                    as="textarea"
                                    rows={3}
                                    id="address"
                                    value={this.state.address}
                                    onChange={this.handleChangeAddress}
                                    className="form-control"
                                />
                            </Form.Group>
                            <Form.Group
                                className="mb-3"
                                controlId="exampleForm.ControlTextarea1"
                            >
                                <Form.Label>Game ID</Form.Label>
                                <input
                                    as="textarea"
                                    rows={3}
                                    id="gameId"
                                    value={this.state.gameId}
                                    onChange={this.handleChangeGameId}
                                    className="form-control"
                                />
                            </Form.Group>
                            <Form.Group
                                className="mb-3"
                                controlId="exampleForm.ControlTextarea1"
                            >
                                <Form.Label>User ID</Form.Label>
                                <input
                                    as="textarea"
                                    rows={3}
                                    id="userId"
                                    value={this.state.userId}
                                    onChange={this.handleChangeUserId}
                                    className="form-control"
                                />
                            </Form.Group>
                        </Form>
                    </Modal.Body>
                    <Modal.Footer>
                        <Button variant="secondary" onClick={this.toggle}>
                            Close
                        </Button>
                        <Button
                            type="submit"
                            value="Submit"
                            color="primary"
                            onClick={this.toggle}
                        >
                            Submit
                        </Button>
                    </Modal.Footer>
                </Modal>
            </div>
        );
    }
}

if (document.getElementById("checkoutModal")) {
    ReactDOM.render(
        <CheckoutModal />,
        document.getElementById("checkoutModal")
    );
}
