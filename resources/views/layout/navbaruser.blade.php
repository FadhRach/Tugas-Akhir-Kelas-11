<nav>
    <div class="logo">Plalogisc</div>
    <input type="checkbox" id="click">
    <label for="click" class="menu-btn">
      <i class="fas fa-bars"></i>
    </label>
    <ul>
      <li><a href="/user">Home</a></li>
      <li><a href="/aboutu">About</a></li>
      <li><a href="/user/place">Place</a></li>
      <li><a href="/user/item">Item</a></li>
      <li><a href="/user/schedule">Schedule</a></li>
      <li class="profile">
        <a href="#" class="prof">
          <img src="{{ url('/Gambar/' . Auth::user()->photouser) }}" alt="img" width="35px" height="35px" style="border-radius: 100%">
          {{ Auth::user()->name }}
        </a>
        
        <ul class="dropdown">
          <li><a href="/profileuser/{{Auth::user()->id}}">Profile</a></li>
          <li><a href="/user/history">History</a></li>
          <li><a class="logout" href="/logout">Logout</a></li>
        </ul>
      </li>
    </ul>
  </nav>