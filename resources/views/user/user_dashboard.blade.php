<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ReAir Dashboard</title>
  <link rel="stylesheet" href="dashboard.css" />
  <style>
    body {
  margin: 0;
  font-family: "Segoe UI", sans-serif;
  background-color: #f8fbfd;
}

.dashboard {
  display: flex;
  height: 100vh;
}

.sidebar {
  width: 240px;
  background-color: #ffffff;
  padding: 20px;
  box-shadow: 2px 0 8px rgba(0, 0, 0, 0.05);
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.logo {
  color: #0072ff;
  margin-bottom: 8px;
}

.slogan {
  font-size: 12px;
  color: #888;
  margin-bottom: 20px;
}

.sidebar ul {
  list-style: none;
  padding: 0;
}

.sidebar li {
  padding: 10px;
  color: #333;
  cursor: pointer;
  border-radius: 6px;
}

.sidebar li.active,
.sidebar li:hover {
  background-color: #e0f0ff;
  color: #0072ff;
}

.logout {
  margin-top: 20px;
  color: #0072ff;
  text-decoration: none;
  font-weight: bold;
}

.main-content {
  flex-grow: 1;
  padding: 20px 30px;
}

.top-bar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}

.top-bar input {
  width: 280px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 20px;
}

.user-controls {
  display: flex;
  align-items: center;
  gap: 12px;
}

.icon {
  cursor: pointer;
  font-size: 20px;
}

.user {
  font-weight: bold;
}

.stats {
  display: flex;
  gap: 20px;
  margin-bottom: 30px;
}

.card {
  background: white;
  padding: 20px;
  border-radius: 10px;
  flex: 1;
  text-align: center;
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.05);
  font-size: 20px;
}

.card small {
  display: block;
  font-size: 12px;
  color: #777;
}

.charts {
  display: flex;
  gap: 20px;
  margin-bottom: 30px;
}

.chart-box {
  flex: 1;
  background: #fff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.05);
}

.pies {
  display: flex;
  justify-content: space-between;
  margin-top: 20px;
}

.pie {
  width: 90px;
  height: 90px;
  background: #e5f3ff;
  border-radius: 50%;
  text-align: center;
  line-height: 45px;
  font-weight: bold;
  font-size: 14px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.save {
  margin-top: 15px;
  padding: 8px 16px;
  background: #0072ff;
  color: white;
  border: none;
  border-radius: 6px;
  cursor: pointer;
}

.bottom-graphs {
  display: flex;
  gap: 20px;
}

.graph {
  flex: 1;
  background: #fff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.05);
}

  </style>
</head>

<x-app-layout>


<body>
  <div class="dashboard">
    <!-- Sidebar -->
    <aside class="sidebar">
      <h2 class="logo">🌍 ReAir</h2>
      <p class="slogan">Transforming Carbon into Cleaner Air</p>
      <nav>
        <ul>
          <li class="active">Dashboard</li>
          <li>Air Quality</li>
          <li>Stations</li>
          <li>Alerts</li>
          <li>Calendar</li>
        </ul>
      </nav>
      <a href="#" class="logout">Logout</a>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <!-- Top Bar -->
      <header class="top-bar">
        <input type="text" placeholder="Search here..." />
        <div class="user-controls">
          <span class="icon">🔔</span>
          <span class="icon">🌙</span>
          <span class="user">Pascal</span>
        </div>
      </header>

      <!-- Metrics -->
      <section class="stats">
        <div class="card">3<br /><small>Stations</small></div>
        <div class="card">70%<br /><small>Average Air Purified</small></div>
        <div class="card">2<br /><small>Trash Area</small></div>
        <div class="card">7<br /><small>Batch Purification</small></div>
      </section>

      <!-- Charts -->
      <section class="charts">
        <div class="chart-box">
          <h3>Pie Chart</h3>
          <div class="pies">
            <div class="pie">81%<br /><small>Station A</small></div>
            <div class="pie">22%<br /><small>Station B</small></div>
            <div class="pie">62%<br /><small>Station C</small></div>
          </div>
        </div>
        <div class="chart-box">
          <h3>ReAir Analysis</h3>
          <img src="https://via.placeholder.com/300x100" alt="Line Chart" />
          <button class="save">Save Report</button>
        </div>
      </section>

      <!-- Graphs -->
      <section class="bottom-graphs">
        <div class="graph">
          <h3>ReAired</h3>
          <img src="https://via.placeholder.com/400x150" alt="Graph" />
        </div>
        <div class="graph">
          <h3>Station Map</h3>
          <img src="https://via.placeholder.com/300x150" alt="Bar Graph" />
        </div>
      </section>
    </main>
  </div>
</body>
</x-app-layout>
</html>
