<style type="text/css">
	
body {
    height: 100%;
    width: 100%;
    margin: 0;
    padding: 0;
    background: #536DFE !important
}


.search {
    margin-bottom: auto;
    margin-top: 200px;
    height: 70px;
    background-color: #fff;
    padding: 10px
}

.search-input {
    color: white;
    border: 0;
    outline: 0;
    background: none;
    width: 0;
    margin-top: 5px;
    caret-color: transparent;
    line-height: 40px;
    transition: width 0.4s linear
}

.search .search-input {
    padding: 0 10px;
    width: 550px;
    caret-color: #536bf6;
    font-size: 21px;
    font-weight: 300;
    color: black;
    transition: width 0.4s linear
}

.search:hover>.search-icon {
    background: #1A237E;
    color: #fff
}

.search-icon {
    height: 50px;
    width: 50px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    background-color: #536bf6
}

a:link {
    text-decoration: none
}

</style>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

<div class="d-flex justify-content-center h-100">
    <div class="search"> <input type="text" class="search-input" placeholder="search..." name=""> <a href="#" class="search-icon"> <i class="fa fa-search"></i> </a> </div>
</div>