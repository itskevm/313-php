module.exports = function(app) {

    app.get("/", function(req, res){
        console.log("Root was requested");
        res.render("home");
    });

}