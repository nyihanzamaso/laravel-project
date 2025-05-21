<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>New Device - ReAir</title>
  <link rel="stylesheet" href="new-device.css" />
  <style>
    * {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: "Segoe UI", sans-serif;
  background: #f8fbfd;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  flex-direction: column;
}

.container {
  width: 100%;
  max-width: 360px;
  padding: 20px;
}

.logo {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  margin-bottom: 1rem;
}

.logo h1 {
  margin: 0;
  font-size: 28px;
}

.logo .blue {
  color: #0072ff;
  font-weight: bold;
}

.logo .air {
  color: #333;
  font-weight: 300;
}

.device-form {
  background: white;
  border: 2px solid #0072ff;
  border-radius: 14px;
  padding: 20px 24px;
  text-align: center;
  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.06);
}

.device-form h2 {
  margin-bottom: 1.2rem;
  color: #0072ff;
  font-size: 18px;
  position: relative;
}

.device-form input {
  width: 100%;
  padding: 12px;
  margin-bottom: 14px;
  border: none;
  border-radius: 10px;
  background: #f5f5f5;
  font-size: 14px;
  color: #333;
  outline: none;
  box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.1);
}

.device-form input:focus {
  background: #eef7ff;
}

.device-form button {
  width: 100%;
  padding: 12px;
  background: linear-gradient(to right, #339dff, #0072ff);
  color: white;
  border: none;
  border-radius: 20px;
  font-size: 14px;
  font-weight: bold;
  cursor: pointer;
  transition: background 0.3s;
}

.device-form button:hover {
  background: linear-gradient(to right, #0072ff, #0056cc);
}

    </style>
</head>
<body>
  <div class="container">
    <!-- Logo -->
    <div class="logo">
      <img src="https://via.placeholder.com/40" alt="logo" />
      <h1><span class="blue">Re</span><span class="air">Air</span></h1>
    </div>

    <!-- Form -->
    <form class="device-form" method="POST" action="{{route('device.assign',['user'=>$user->id])}}">
        @csrf
        @method('post')
      <h2>NEW DEVICE</h2>

      <div>
                <x-label for="location" value="{{ __('Location') }}" />
                <x-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location')" required autofocus autocomplete="location" />
            </div>
      <div>
                <x-label for="owner" value="{{ __('Owner') }}" />
                <x-input id="owner" class="block mt-1 w-full" type="text" name="owner" :value="old('owner')" required autofocus autocomplete="owner" value="{{$user->name}}" />
            </div>
      <div>
                <x-label for="phone" value="{{ __('Phone') }}" />
                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" value="{{$user->phone}}" />
            </div>
      <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus autocomplete="email" value="{{$user->email}}" />
            </div>
      <div>
                <x-label for="industry" value="{{ __('Industry') }}" />
                <x-input id="industry" class="block mt-1 w-full" type="text" name="industry" :value="old('industry')" required autofocus autocomplete="industry" />
            </div>

      <button type="submit">CREATE</button>
    </form>
  </div>
</body>
</html>
