<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ReAir - Devices</title>
  <link rel="stylesheet" href="devices.css" />
  <style>
    body {
  margin: 0;
  font-family: "Segoe UI", sans-serif;
  background-color: #f8fbfd;
}

.dashboard {
  display: flex;
}

.sidebar {
  width: 220px;
  background: white;
  padding: 1.5rem;
  box-shadow: 2px 0 5px rgba(0, 0, 0, 0.05);
  height: 100vh;
}

.logo {
  color: #0072ff;
  margin-bottom: 0.5rem;
}

.slogan {
  font-size: 12px;
  color: #888;
  margin-bottom: 2rem;
}

.sidebar ul {
  list-style: none;
  padding: 0;
}

.sidebar li {
  padding: 10px;
  color: #444;
  cursor: pointer;
  border-radius: 6px;
}

.sidebar li.active,
.sidebar li:hover {
  background-color: #e0f0ff;
  color: #0072ff;
}

.main-content {
  flex: 1;
  padding: 1rem 2rem;
}

.top-bar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 1rem;
}

.top-bar h1 {
  margin: 0;
}

.add-device {
  background-color: #339dff;
  color: white;
  border: none;
  padding: 0.6rem 1rem;
  border-radius: 5px;
  cursor: pointer;
  font-size: 14px;
}

.device-table {
  background: #ffffff;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 1px 4px rgba(0,0,0,0.05);
}

table {
  width: 100%;
  border-collapse: collapse;
}

thead {
  background-color: #ccc;
}

thead th {
  padding: 12px;
  text-align: left;
  font-weight: bold;
}

tbody tr {
  background-color: #f3f3f3;
  border-bottom: 1px solid #ddd;
}

tbody td {
  padding: 12px;
  font-size: 14px;
}

.active {
  color: green;
  font-weight: bold;
}

.inactive {
  color: red;
  font-weight: bold;
}

.bell {
  font-size: 18px;
}

.count {
  margin-left: 5px;
  font-weight: bold;
}

.action {
  margin-right: 10px;
  cursor: pointer;
  font-size: 16px;
  color: #7b2cbf;
}

.action.delete {
  color: #e63946;
}

  </style>
</head>
<body>
    <x-app-layout>
  <div class="dashboard">
    <!-- Sidebar -->
    <aside class="sidebar">
      <h2 class="logo">🌍 ReAir</h2>
      <p class="slogan">Transforming Carbon into Cleaner Air</p>
      <nav>
        <ul>
          <a href="{{route('home')}}"><li>Dashboard</li></a>
          <li>Air Quality</li>
          <li class="active">Device Status</li>
          <a href="{{route('userlist')}}"><li>User</li></a>
          <li>Analytics</li>
          <li>Alerts</li>
          <li>Calendar</li>
        </ul>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <header class="top-bar">
        <h1>Devices</h1>
    <!--    <button class="add-device">+ Add New Device</button> -->
      </header>

      <section class="device-table">
        <table>
          <thead>
            <tr>
                
              <th><em>ID</em></th>
              <th>LOCATION</th>
              <th>OWNER</th>
              <th>STATUS</th>
              <th>PHONE</th>
              <th>EMAIL</th>
              <th>INDUSTRY</th>
              <th>CREATED_AT</th>
              <th>ACTIONS</th>
            </tr>
          </thead>
          @foreach($device as $device)
          <tbody>
            <tr>
              <td>{{$device->id}}</th>
              <td>{{$device->location}}</td>
              <td>{{$device->owner}}</td>
              <td class="active">{{$device->status}}</td>
              <td>{{$device->phone}}</td>
              <td>{{$device->email}}</td>
              <td>{{$device->industry}}</td>
              <td>{{$device->created_at}}</td>
              <td>
                <a href="{{route('device.edit',['device'=>$device->id])}}"><span class="action">✏️</span></a>
                <span class="action">👁️</span>
                <span class="action delete">🗑️</span>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </section>
    </main>
  </div>
</x-app-layout>
</body>
</html>
