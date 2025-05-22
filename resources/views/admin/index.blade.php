<!DOCTYPE html>
<html>
    <head>

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
    background-color: #fff;
    padding: 1rem;
    border-right: 1px solid #e0e0e0;
    height: 100vh;
    box-shadow: 2px 0 5px rgba(0,0,0,0.05);
  }
  
  .logo {
    color: #0072ff;
    margin-bottom: 0.5rem;
  }
  
  .slogan {
    font-size: 12px;
    color: #888;
    margin-bottom: 1rem;
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
  
  .logout {
    display: block;
    margin-top: 2rem;
    color: #0072ff;
    text-decoration: none;
  }
  
  .main-content {
    flex: 1;
    padding: 1rem 2rem;
  }
  
  .top-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  
  .top-bar input {
    width: 300px;
    padding: 0.5rem;
    border: 1px solid #ccc;
    border-radius: 20px;
  }
  
  .actions .icon {
    margin-left: 10px;
    cursor: pointer;
  }
  
  .stats {
    display: flex;
    gap: 1rem;
    margin: 1rem 0;
  }
  
  .card {
    background: #fff;
    padding: 1rem;
    border-radius: 10px;
    box-shadow: 0 1px 4px rgba(0,0,0,0.05);
    flex: 1;
    text-align: center;
    font-size: 18px;
  }
  
  .card small {
    display: block;
    font-size: 12px;
    color: #666;
  }
  
  .charts {
    display: flex;
    gap: 2rem;
    margin-bottom: 2rem;
  }
  
  .chart-box {
    flex: 1;
    background: #fff;
    padding: 1rem;
    border-radius: 10px;
    box-shadow: 0 1px 4px rgba(0,0,0,0.05);
  }
  
  .pies {
    display: flex;
    justify-content: space-between;
    margin-top: 1rem;
  }
  
  .pie {
    width: 80px;
    height: 80px;
    background: #e5f3ff;
    border-radius: 50%;
    text-align: center;
    line-height: 80px;
    font-weight: bold;
    font-size: 14px;
  }
  
  .save {
    margin-top: 1rem;
    padding: 0.5rem 1rem;
    border: none;
    background: #0072ff;
    color: white;
    border-radius: 5px;
    cursor: pointer;
  }
  
  .bottom-graphs {
    display: flex;
    gap: 2rem;
  }
  
  .graph {
    flex: 1;
    background: #fff;
    padding: 1rem;
    border-radius: 10px;
    box-shadow: 0 1px 4px rgba(0,0,0,0.05);
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
          <li class="active">Dashboard</li>
          <li>Air Quality</li>
          <a href="{{route('view_device_list')}}"><li>Device Status</li></a>
          <a href="{{route('userlist')}}"><li>User</li></a>
          <li>Analytics</li>
          <li>Alerts</li>
          <li>Calendar</li>
          <li>Settings</li>
        </ul>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <!-- Header -->
      <header class="top-bar">
        <input type="text" placeholder="Search here..." />
        <div class="actions">
          <span class="icon">🔒</span>
          <span class="icon">🔔</span>
          <span class="icon">🌙</span>
        </div>
      </header>

      <!-- Stats -->
      <section class="stats">
        <div class="card">75<br /><small>Total Devices</small></div>
        <div class="card">357<br /><small>Total Users</small></div>
        <div class="card">65<br /><small>Total Polluted</small></div>
        <div class="card">128<br /><small>Total ReAir</small></div>
      </section>

      <!-- Charts -->
      <section class="charts">
        <div class="chart-box">
          <h3>Pie Chart</h3>
          <div class="pies">
            <div class="pie">81%<br /><small>Total Devices</small></div>
            <div class="pie">22%<br /><small>Users Growth</small></div>
            <div class="pie">82%<br /><small>Total ReAir</small></div>
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
          <h3>Users Map</h3>
          <img src="https://via.placeholder.com/300x150" alt="Bar Graph" />
        </div>
      </section>
    </main>
  </div>

   
</x-app-layout>

</body>
</html>
