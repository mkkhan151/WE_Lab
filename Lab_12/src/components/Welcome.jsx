import React from 'react'

// accessing props by destructuring method of objects
function Welcome({ name }) {
    return (
        <div>
            <h1>Welcome! {name}</h1>
            <h2>to CSE Batch 4</h2>
        </div>
    )
}

export default Welcome
