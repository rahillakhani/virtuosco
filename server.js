var express = require("express");
var app = express();

var port = process.env.PORT || 8080;


app.use(express.static('v2'));

app.get("/", (req,res) => {
    res.sendFile( "/v2/index.html");
});

app.listen(port, () => {
    console.log("runnin at ", port);
});