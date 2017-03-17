var Boxes = 5;
            
            function createBoxes()
            {
                for (var i=0; i< Boxes; i++)
                {
                    var currentDiv = document.createElement("div");
                    var idNum = "divNum" + i;
                    currentDiv.setAttribute("id", idNum);
                    currentDiv.setAttribute("class", "Divs")
                    document.body.appendChild(currentDiv);
                }
            }
            
            function divChange()
            {
                
                var height = document.getElementById("height").value + "px";
                var width = document.getElementById("width").value + "px";
                var color = document.getElementById("color").value;

                for(var i=0;i<Boxes;i++)
                {
                    var divNum = document.getElementById("divNum"+i);
                    
                    divNum.style.height = height;
                    divNum.style.width = width;
                    divNum.style.backgroundColor = color;
                }
            }
            
            function defaulty()
            {
                for(var i=0;i<Boxes;i++)
                {
                    var currentDiv = document.getElementById("divNum"+i);
                    
                    var height = "100px";
                    var width = "100px";
                    var color = "red";
                    
                    currentDiv.style.height = height;
                    currentDiv.style.width = width;
                    currentDiv.style.backgroundColor = color;
                }
            }
            