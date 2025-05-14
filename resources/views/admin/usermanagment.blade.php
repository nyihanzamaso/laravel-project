<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ReAir - User Management</title>
  <link rel="stylesheet" href="users.css" />
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
  margin-bottom: 1.5rem;
}

.top-bar input {
  width: 300px;
  padding: 0.5rem;
  border: 1px solid #ccc;
  border-radius: 20px;
}

.actions {
  display: flex;
  align-items: center;
  gap: 10px;
}

.user-name {
  font-weight: bold;
}

.avatar {
  width: 32px;
  height: 32px;
  border-radius: 50%;
}

.user-management {
  background: #eaf2fb;
  padding: 1rem;
  border-radius: 10px;
}

.user-bar {
  display: flex;
  justify-content: space-between;
  margin-bottom: 1rem;
}

.user-bar input {
  width: 250px;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 20px;
}

.controls {
  display: flex;
  gap: 10px;
}

.filter,
.add-user {
  padding: 8px 14px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.filter {
  background: #eee;
}

.add-user {
  background: #0072ff;
  color: white;
}

.user-table table {
  width: 100%;
  border-collapse: collapse;
  background: white;
  border-radius: 8px;
  overflow: hidden;
}

.user-table th,
.user-table td {
  padding: 12px;
  text-align: left;
  border-bottom: 1px solid #ddd;
  font-size: 14px;
}

.user-table th {
  background-color: #f0f8ff;
  font-weight: bold;
}

.icon {
  cursor: pointer;
  margin-right: 8px;
  font-size: 16px;
}

  </style>
</head>
<body>
  <div class="dashboard">
    <!-- Sidebar -->
    <aside class="sidebar">
      <h2 class="logo">🌍 ReAir</h2>
      <p class="slogan">Transforming Carbon into Cleaner Air</p>
      <nav>
        <ul>
        <a href="{{route('home')}}"><li>Dashboard</li></a>
          <li>Air Quality</li>
          <a href="{{route('devices')}}"><li>Device Status</li></a>
          <li class="active">User</li>
          <li>Analytics</li>
          <li>Alerts</li>
          <li>Calendar</li>
        </ul>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <!-- Top Bar -->
      <header class="top-bar">
        <input type="text" placeholder="Search..." />
        <div class="actions">
          <span class="icon">🔒</span>
          <span class="icon">🔔</span>
          <span class="icon">🌙</span>
          <span class="user-name">Pascal</span>
          <img src="https://via.placeholder.com/32" class="avatar" alt="avatar" />
        </div>
      </header>

      <!-- User Management -->
      <section class="user-management">
        <div class="user-bar">
          <input type="text" placeholder="Search user" />
          <div class="controls">
            <button class="filter">Filter</button>
            <button class="add-user">Add New User</button>
          </div>
        </div>

        <div class="user-table">
          <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email Address</th>
                <th>Phone Number</th>
                <th>User Type</th>
                <th>Date created</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($user as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->usertype}}</td>
                <td>{{$user->created_at}}</td>
                <td>
                  <span class="icon">👁</span>
                  <a href="{{route('user.edit', ['user'=> $user])}}"><span class="icon">✏️</span></a>
                  <span class="icon">🗑️</span>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </section>
    </main>
  </div>
</body>
</html>
