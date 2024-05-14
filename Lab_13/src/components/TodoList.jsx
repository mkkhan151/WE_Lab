import React, { Component } from 'react'

export default class TodoList extends Component {
    constructor() {
        super();
        this.state = {
            todos: [],
            newTodo: "",
        }
    }

    addTodo = () => {
        if (this.state.newTodo) {
            this.setState({
                todos: [this.state.newTodo, ...this.state.todos],
                newTodo: ''
            })
        }
    }

    render() {
        return (
            <div>
                <input
                    type="text"
                    value={this.state.newTodo}
                    placeholder='Add Todo'
                    onChange={(e) => this.setState({ ...this.state, newTodo: e.target.value })} />
                <br /> <br />
                <button
                    onClick={this.addTodo}
                >
                    Add Todo</button>
                <hr />

                <ul>
                    {this.state.todos.map((todo, index) => (
                        <li key={index}>
                            {todo}
                        </li>
                    ))}
                </ul>
            </div>
        )
    }
}
