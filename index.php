<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Inventory Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="script.js"></script>
    <style>
        body{
            height: 100%;
        }
        .card-img-top{
            max-height: 88.53px;
        }
    </style>
</head>
<body>
    <?php
    require_once 'crud.php';
    require_once 'db_connection.php';
    $db = new Database("localhost", "root", "", "db_manginasal");

// Create an instance of the Product class and inject the database connection
$item = new Item($db);?>
    <div
        class="container-fluid bg-warning text-success p-3"
    >
    <div style="width: 10px; height: 10px; margin-top: 0; margin-left: 40px; margin-bottom: 0; position: in-line"> 
        <img src="mang_inasal.png" alt="logo">
    </div>

        <h1 class="text-danger text-center fw-bold fs-2" style="font-family:Impact, fantasy; letter-spacing:.1rem;">MANG INASAL INVENTORY MANAGEMENT SYSTEM</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 bg-success p-5 ">
              
                <ul  class="list-group list-group-horizontal-xxl text-center fs-3" id="myList">
                <li id="item" onclick="toggle()" class="list-group-item list-group-item-action list-group-item-success mb-5 rounded-1rem active pointer fs-5"  style="border-radius: 1rem; cursor:pointer;">Stocks</li>
       
                <li id="sold" onclick="toggle()" class="list-group-item list-group-item-action list-group-item-success mb-5 rounded-1rem pointer fs-5"  style="border-radius: 1rem; cursor:pointer;">Sold</li>
                <li id="history" onclick="toggle()" class="list-group-item list-group-item-action list-group-item-success mb-5 rounded-1rem pointer fs-5"  style="border-radius: 1rem; cursor:pointer;">Sold History</li>      
                </ul>
            </div>
            
            <div id="item-display" class="col-10 bg-danger p-5 position-relative">
    <div class="over row pb-5 position-relative" > 
    
            <?php
                include 'items.php';
            ?>
              
    </div>
    </div>
            <div id="sold-display" class="col-10 bg-danger p-4 position-relative" style="display: none;">
    <div class="over row pb-5" > 
    <div class="container"><p class="h3 text-body-secondary" style="text-shadow: 1px 1px 2px white; ">Daily Sold</p></div>
            <?php
                include 'sold.php';
                ?>
            </div>
    </div>
    <div id="history-display" class="col-10 bg-danger p-4 position-relative" style="display: none;">
    <div class="over row"> 
        <div class="container"><p class="h3 text-body-secondary" style="text-shadow: 1px 1px 2px white; ">Daily Sold History</p></div>
        <?php include 'soldHistory.php'; 
       
        ?>
    </div>
</div>

   
   

<script>

    
    document.addEventListener('DOMContentLoaded', function() {
    var listItems = document.querySelectorAll('#myList li');
    var displayDivs = {
        'item': document.getElementById('item-display'),
        'sold': document.getElementById('sold-display'),
        'history': document.getElementById('history-display')
    };

    function toggleDisplay(tabId) {
        for (var tab in displayDivs) {
            if (tab === tabId) {
                listItems.forEach(function(item) {
                    if (item.id === tabId) {
                        item.classList.add('active');
                    } else {
                        item.classList.remove('active');
                    }
                });
                displayDivs[tab].style.display = "block";
            } else {
                displayDivs[tab].style.display = "none";
            }
        }
    }

    listItems.forEach(function(item) {
        item.addEventListener('click', function(event) {
            var clickedTab = this.id;
            toggleDisplay(clickedTab);
            localStorage.setItem('activeTab', clickedTab);
        });
    });

    // Set active tab based on localStorage or default to 'item'
    var activeTab = localStorage.getItem('activeTab') || 'item';
    toggleDisplay(activeTab);
});

</script>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>