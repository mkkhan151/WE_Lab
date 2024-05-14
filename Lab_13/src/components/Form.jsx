import React, {useState} from "react";

const Form = () => {
    const [name, setName] = useState('');
    const [email, setEmail] = useState('');

    const [error, setError] = useState('');
    const [success, setSuccess] = useState('');

    const handleSubmission = (e) => {
        e.preventDefault();
        setError('');
        setSuccess('');

        if(!name) {
            setError("Please fill the name field.");
            return;
        }

        if(!email) {
            setError("Please fill the email field.");
            return;
        }

        setSuccess('Your form has been successfully submitted');
    }
    return (
        <>
            <form onSubmit={handleSubmission}>
                {error && <p style={{color: 'red'}}>{error}</p>}
                {success && <p style={{color:'green'}}>{success}</p>}

                Name: <input type="text" onChange={(e) => setName(e.target.value)}/> <br /><br />
                email: <input type="email" onChange={(e) => setEmail(e.target.value)}/> <br /><br />

                <input type="submit" value="Submit" />
            </form>
        </>
    )
}

export default Form