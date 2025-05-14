<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Post</title>
  <style>
    body {
      font-family: "Segoe UI", sans-serif;
      background: #f4f8fb;
      padding: 40px;
    }

    .form-container {
      background: white;
      padding: 20px 30px;
      max-width: 500px;
      margin: 0 auto;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    h2 {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-top: 15px;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"],
    textarea {
      width: 100%;
      padding: 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
      font-size: 14px;
    }

    button {
      margin-top: 20px;
      padding: 10px 16px;
      background-color: #007bff;
      border: none;
      color: white;
      border-radius: 6px;
      font-size: 14px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h2>Create New Post</h2>
    <form action="{{route('create')}}" method="POST">
      @csrf
      <label for="title">Title</label>
      <input type="text" id="title" name="title" required>

      <label for="body">Body</label>
      <textarea id="body" name="body" rows="5" required></textarea>

      <button type="submit">Submit</button>
    </form>
  </div>

</body>
</html>
