<!-- Example table markup -->
<html>
<body>
<!-- Example table markup -->
<div>
  <label for="searchInput">Search:</label>
  <input type="text" id="searchInput">
  
  <label for="filterDropdown">Filter:</label>
  <select id="filterDropdown">
    <option value="All">All</option>
    <option value="Red">Red</option>
    <option value="Green">Green</option>
    <option value="Blue">Blue</option>
  </select>
</div>
<?php echo"
<table id='dataTable'>
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Age</th>
      <th>Color</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>John Doe</td>
      <td>25</td>
      <td>Red</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Jane Smith</td>
      <td>30</td>
      <td>Green</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Bob Johnson</td>
      <td>40</td>
      <td>Blue</td>
    </tr>
    <tr>
      <td>4</td>
      <td>Alice Brown</td>
      <td>35</td>
      <td>Red</td>
    </tr>
  </tbody>
</table>";


?>
<script>
  // Filter the table based on the selected color and search query
  function filterTable() {
    const input = document.getElementById('searchInput');
    const filter = input.value.toUpperCase();
    const select = document.getElementById('filterDropdown');
    const filterValue = select.options[select.selectedIndex].value;

    const table = document.getElementById('dataTable');
    const rows = table.getElementsByTagName('tr');

    // Filter the table rows
    for (let i = 1; i < rows.length; i++) {
      const row = rows[i];
      const cells = row.getElementsByTagName('td');
      const color = cells[3].textContent.toUpperCase();
      const values = Array.from(cells).map(cell => cell.textContent.toUpperCase());

      if ((filterValue === 'All' || color === filterValue.toUpperCase())
        && values.some(value => value.includes(filter))) {
        row.style.display = '';
      } else {
        row.style.display = 'none';
      }
    }
  }

  // Attach filterTable function to events (e.g. button click, input change)
  const searchInput = document.getElementById('searchInput');
  searchInput.addEventListener('input', filterTable);

  const filterDropdown = document.getElementById('filterDropdown');
  filterDropdown.addEventListener('change', filterTable);
</script>

</body>
</html>
