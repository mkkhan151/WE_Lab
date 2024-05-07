import React from 'react'

function Fruits({fruitItems}) {
  return (
    <div>
      <h2>Fruits</h2>
      <ul>
        {fruitItems.map((item, index) => (
            <li key={index}>
                {item}
            </li>
        ))}
      </ul>
    </div>
  )
}

export default Fruits
