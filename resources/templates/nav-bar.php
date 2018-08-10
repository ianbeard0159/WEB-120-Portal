
<div id = "top-bar">
    <h1 id = "top-text">WEB120 Portal Website</h1>
    <div id = "top-menu">
        <a class = "top-item <?php if ( $PageID == "Welcome" ) { echo "selected"; } ?>" 
            id = "home" href = "index.php">Home</a>
        <p>-</p>
        <a class = "top-item <?php if ( $PageID == "BIG" ) { echo "selected"; } ?>" 
            id = "top-big" href = "big.php">BIG</a>
        <p>-</p>
        <a class = "top-item <?php if ( $PageID == "AIA" ) { echo "selected"; } ?>" 
            id = "top-aia" href = "aia.php">AIA</a>
        <p>-</p>
        <a class = "top-item <?php if ( $PageID == "Flowchart" ) { echo "selected"; } ?>" 
            id = "top-flow" href = "flowchart.php">Flowchart</a>
        <p>-</p>
        <a class = "top-item <?php if ( $PageID == "Final" ) { echo "selected"; } ?>" 
            id = "top-final" href = "https://www.dargarth.org/">Final Project</a>
        <p>-</p>
        <a class = "top-item <?php if ( $PageID == "Contact" ) { echo "selected"; } ?>" 
            id = "top-contact">Contact Me</a>
    </div>
    <a id = "nav-symbol">
        <i class="fa fa-bars"></i>
    </a>
</div>
<div id = "drop-menu">
    <a class = "top-item <?php if ( $PageID == "Welcome" ) { echo "selected"; } ?>" 
        id = "drop-home">Home</a>
    <a class = "top-item <?php if ( $PageID == "BIG" ) { echo "selected"; } ?>" 
        id = "drop-big" href="big.php">BIG</a>
    <a class = "top-item <?php if ( $PageID == "AIA" ) { echo "selected"; } ?>" 
        id = "drop-aia" href = "aia.php">AIA</a>
    <a class = "top-item <?php if ( $PageID == "Flowchart" ) { echo "selected"; } ?>" 
        id = "drop-flow" href = "flowchart.php">Flowchart</a>
    <a class = "top-item <?php if ( $PageID == "Final" ) { echo "selected"; } ?>" 
        id = "drop-final" href = "https://www.dargarth.org/">Final Project</a>
    <a class = "top-item <?php if ( $PageID == "Contact" ) { echo "selected"; } ?>" 
        id = "drop-contact">Contact Me</a>
</div>