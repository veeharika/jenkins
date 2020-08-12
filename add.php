<?php include"includes/header.php" ?>

<h1 class='text-center'> Add Policy </h1>
<div class="container">
    <form action="add.php" method="post">
    <h1>PLEASE COMPLETE YOUR INFORMATION BELOW</h1>
        <div class="form-group">
            <label for="dofbuy"><h2>- YEAR -</h2></label>
            <select class="form-control" name="dofbuy">
                <option value="">Select your year</option>
                <option>2020</option>
                <option>2019</option>
                <option>2018</option>
                <option>2017</option>
                <option>2016</option>
                <option>2015</option>
                <option>2014</option>
                <option>2013</option>
                <option>2012</option>
                <option>2010</option>
                <option>2009</option>
                <option>2008</option>
                <option>2007</option>
                <option>2006</option>
                <option>2005</option>
                <option>2004</option>
                <option>2003</option>
                <option>2002</option>
                <option>2001</option>
                <option>2000</option>
            </select>
        </div>
        <div class="form-group">
            <label for="cname"><h2>- COMPANY -</h2></label>
            <select class="form-control" name="cname">
                    <option value="">Select your Company</option>
                    <option>MERCEDES</option>
                    <option>AUDI</option>
                    <option>BMW</option>
                    <option>TOYOTA</option>
                    <option>HYUNDAI</option>
                    <option>HONDA</option>
                    <option>TATA</option>
                    <option>MARUTI</option>
                    <option>JEEP</option>
                    <option>Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="model"><h2>- Model -</h2></label>
            <input class="form-control" name="model" type="text" placeholder="Ex: TATA Nano">
        </div>
        <div class="form-group col-md-2">
            <label for="years">No of Years</label>
            <input class="form-control" type="number" name="years">
        </div>
        <div class="form-group col-md-2">
            <label for="price">Premium</label>
            <input class="form-control" type="number" id="price" name="price" required>
        </div>
        <div class="form-group">
            <label for="custname">Customer Name</label>
            <input type="text" name="custname" id="custname" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="cphone">Customer Phone Number</label>
            <input class="form-control" id="cphone" type="tel" name="cphone" placeholder="Phone Number">
        </div>
        <div class="form-group">
            <label for="cemail">Customer Email</label>
            <input class="form-control" type="email" id="cemail" name="cemail" placeholder="Email">
        </div>
        <button type="submit" class="btn btn-primary" name="add">Add the Policy</button>
    </form>
</div>

<?php include"includes/footer.php" ?>
