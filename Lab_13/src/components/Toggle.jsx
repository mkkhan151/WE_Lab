import React, { Component } from 'react'

export default class Toggle extends Component {
    constructor() {
        super();
        this.state = {
            isOn: false
        }
    }

    handleClick = () => {
        this.setState({
            isOn: !this.state.isOn
        })
    }
    render() {
        return (
            <button
                onClick={this.handleClick}
                style={{
                    padding: "8px",
                    border: "1px solid black",
                    borderRadius: '4px'
                }}
            >
                {this.state.isOn ? "ON" : "OFF"}
            </button>
        )
    }
}
