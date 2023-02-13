@extends('layouts.app')

<style>
    /* * {
        box-sizing: border-box;
    } */

    input[type=text],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }
</style>

@section('content')
    <div class="container">




        <body>

            <h3>Contact Form</h3>

            <div class="container">
                <form action="{{url('action_contact')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="FirstName" placeholder="Your name..">

                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="LastName" placeholder="Your last name..">

                    <label for="country">Country</label>
                    <select id="country" name="Country">
                        <option value="australia">Australia</option>
                        <option value="canada">Canada</option>
                        <option value="usa">USA</option>
                        <option value="uk">UK</option>
                    </select>

                    <label for="subject">Subject</label>
                    <textarea id="subject" name="Subject" placeholder="Write something.." style="height:200px"></textarea>

                    <input type="submit" value="Submit">
                </form>
            </div>

        </body>

        </html>

    </div>
@endsection
