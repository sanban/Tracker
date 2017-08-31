<!doctype html>
<style type="text/css">
    #page {
        margin-left: 200px;
    }
    #maincontent {
        float: right;
        width: 100%;
        background-color: #F0F0F0;
    }
    #menuleftcontent{
        float: left;
        width: 200px;
        margin-left: -200px;
        background-color: #CCCCCC;
    }
    #clearingdiv {
        clear: both;
    }
</style>
<html>
<div id="page">
    <div id="maincontent">
        <div id="firstcontent">firstcontent</div>
        <div id="secondcontent">secondcontent</div>
    </div>
    <div id="menuleftcontent">
        <ul id="menu">
            <li><a href="#firstcontent">first</a></li>
            <li><a href="#secondcontent">second</a></li>
        </ul>
    </div>
    <div id="clearingdiv"></div>
</div>
</html>