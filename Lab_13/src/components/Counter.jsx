import React, { Component } from 'react'

export default class Counter extends Component {
    constructor() {
        super();
        this.state = {
            count: 0
        }
    }

    increment = () => {
        this.setState({
            count: this.state.count + 1
        })
    }

    decrement = () => {
        this.setState({
            count: this.state.count - 1
        })
    }

    render() {
        return (
            <div>
                <button onClick={this.decrement}> - </button> &nbsp;
                <input type="number" value={this.state.count} disabled style={{textAlign: 'center'}} /> &nbsp;
                <button onClick={this.increment}> + </button>
            </div>
        )
    }
}
