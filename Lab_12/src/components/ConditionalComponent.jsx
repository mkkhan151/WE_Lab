import React from 'react'

function ConditionalComponent({isLoggedIn}) {
  return (
    <div>
      <h1>
        {isLoggedIn ? "Welcome Back!" : "Please log in"}
      </h1>
    </div>
  )
}

export default ConditionalComponent
