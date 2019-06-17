---
title: '• Tarea | Elevator Solution'
---

<p>Challenge 1:</p>

<pre><code>{
    init: function(elevators, floors) {
        var elevator = elevators[0]; // Let's use the first elevator

        // Whenever the elevator is idle (has no more queued destinations) ...
        elevator.on("idle", function() {
            // let's go to all the floors (or did we forget one?)
            elevator.goToFloor(0);
            elevator.goToFloor(1);
            elevator.goToFloor(2);
        });
    },
    update: function(dt, elevators, floors) {
        // We normally don't need to do anything here
    }
}</code></pre>
<p>Challenge 2:</p>

<pre><code>{
    init: function(elevators, floors) {
        var elevator = elevators[0]; // Let's use the first elevator

        // Whenever the elevator is idle (has no more queued destinations) ...
        elevator.on("idle", function() {
            // let's go to all the floors (or did we forget one?)
            elevator.goToFloor(0);
            elevator.goToFloor(1);
            elevator.goToFloor(2);
            elevator.goToFloor(3);
        });
    },
    update: function(dt, elevators, floors) {
        // We normally don't need to do anything here
    }
}</code></pre>
<p>Challenge 3: </p>

<pre><code>{
    init: function(elevators, floors) {
        var elevator = elevators[0]; // Let's use the first elevator

        // Whenever the elevator is idle (has no more queued destinations) ...
        elevator.on("idle", function() {
            // let's go to all the floors (or did we forget one?)
            elevator.goToFloor(0);
            elevator.goToFloor(1);
            elevator.goToFloor(2);
            elevator.goToFloor(3);
            elevator.goToFloor(4);

        });
    },
    update: function(dt, elevators, floors) {
        // We normally don't need to do anything here
    }
}</code></pre>
<p>Challenge 4:</p>

<pre><code>{
    init: function(elevators, floors) {
        var elevator = elevators[0]; // Let's use the first elevator
        var elevator1 = elevators[1];

        // Whenever the elevator is idle (has no more queued destinations) ...
        elevator.on("idle", function() {
            // let's go to all the floors (or did we forget one?)
            elevator.goToFloor(0);
            elevator.goToFloor(1);
            elevator.goToFloor(2);
            elevator.goToFloor(3);
            elevator.goToFloor(4);
            elevator.goToFloor(5);
            elevator.goToFloor(6);
            elevator.goToFloor(7);

        });
        // Whenever the elevator is idle (has no more queued destinations) ...
        elevator1.on("floor_button_pressed", function() {
            // let's go to all the floors (or did we forget one?)
            elevator1.goToFloor(7);
            elevator1.goToFloor(6);
            elevator1.goToFloor(5);
            elevator1.goToFloor(4);
            elevator1.goToFloor(3);
            elevator1.goToFloor(2);
            elevator1.goToFloor(1);
            elevator1.goToFloor(0);
        });
    },  
    update: function(dt, elevators, floors) {
        // We normally don't need to do anything here
    }
}</code></pre>
<p>Challenge 5: </p>

<pre><code>{
    init: function(elevators, floors) {
        var elevator = elevators[0]; // Let's use the first elevator
        var elevator1 = elevators[1];
        var elevator2 = elevators[2];
        var elevator3 = elevators[3];

        // Whenever the elevator is idle (has no more queued destinations) ...
        elevator.on("idle", function() {
            // let's go to all the floors (or did we forget one?)
            elevator.goToFloor(0);
            elevator.goToFloor(1);
            elevator.goToFloor(2);
            elevator.goToFloor(3);
            elevator.goToFloor(4);
            elevator.goToFloor(5);
            elevator.goToFloor(6);
            elevator.goToFloor(7);

        });
        // Whenever the elevator is idle (has no more queued destinations) ...
        elevator1.on("floor_button_pressed", function() {
            // let's go to all the floors (or did we forget one?)
            elevator1.goToFloor(7);
            elevator1.goToFloor(6);
            elevator1.goToFloor(5);
            elevator1.goToFloor(4);
            elevator1.goToFloor(3);
            elevator1.goToFloor(2);
            elevator1.goToFloor(1);
            elevator1.goToFloor(0);
        });
        elevator2.on("floor_button_pressed", function() {
            elevator2.goToFloor(7);
            elevator2.goToFloor(6);
            elevator2.goToFloor(5);
            elevator2.goToFloor(4);
            elevator2.goToFloor(3);
            elevator2.goToFloor(2);
            elevator2.goToFloor(1);
            elevator2.goToFloor(0);
        });
        elevator3.on("floor_button_pressed", function() {
            elevator3.goToFloor(7);
            elevator3.goToFloor(6);
            elevator3.goToFloor(5);
            elevator3.goToFloor(4);
            elevator3.goToFloor(3);
            elevator3.goToFloor(2);
            elevator3.goToFloor(1);
            elevator3.goToFloor(0);
        });
    },  
    update: function(dt, elevators, floors) {
        // We normally don't need to do anything here
    }
}</code></pre>
<p>Challenge 6: </p>

<pre><code>{
    init: function(elevators, floors) {
        var elevator = elevators[0]; // Let's use the first elevator
        var elevator1 = elevators[1];
        Whenever the elevator is idle (has no more queued destinations) ...
        elevator.on("idle", function() {
            // let's go to all the floors (or did we forget one?)
            elevator.goToFloor(0);
            elevator.goToFloor(1);
            elevator.goToFloor(2);
            elevator.goToFloor(3);            
        });
        // Whenever the elevator is idle (has no more queued destinations) ...
        if(elevator1.loadFactor() &lt; 0) {
            elevator1.goToFloor(0);
        }else{
        elevator1.on("idle", function() {
            elevator1.goToFloor(3);
            elevator1.goToFloor(2);
            elevator1.goToFloor(1);
            elevator1.goToFloor(0);
        });
        }
    },  
    update: function(dt, elevators, floors) {
        // We normally don't need to do anything here
    }
}</code></pre>
<p>Challenge 7:</p>

<pre><code>{
    init: function(elevators, floors) {
        var elevator = elevators[0]; // Let's use the first elevator
        var elevator1 = elevators[1];
        var elevator2 = elevators[2];

        // Whenever the elevator is idle (has no more queued destinations) ...
        if(elevator.loadFactor() &lt; 0){
            elevator.goToFloor(0);
        }else{
            elevator.on("idle", function() {
                elevator.goToFloor(0);
                elevator.goToFloor(1);
                elevator.goToFloor(2);
                elevator.goToFloor(0);

            });
        }

        if(elevator1.loadFactor() &lt; 0) {
            elevator1.goToFloor(0);
        }else{
            elevator1.on("floor_button_pressed", function() {
            elevator1.goToFloor(0);
            elevator1.goToFloor(1);
            elevator1.goToFloor(2);
            elevator1.goToFloor(0);
            });
        }
        if(elevator2.loadFactor()&lt;0){
            elevator2.goToFloor(0);
        }
        else{
            elevator2.on("idle", function() {
                elevator2.goToFloor(0);
                elevator2.goToFloor(1);
                elevator2.goToFloor(2);
                elevator2.goToFloor(0);
            });
        }

    },  
    update: function(dt, elevators, floors) {
        // We normally don't need to do anything here
    }
}</code></pre>
<p>Challenge 8:</p>

<pre><code>{
    init: function(elevators, floors) {
        var elevator = elevators[0]; // Let's use the first elevator
        var elevator1 = elevators[1];
        var elevator2 = elevators[2];

        elevator.on("floor_button_pressed", function() {
            elevator.goToFloor(0);
            elevator.goToFloor(1);
            elevator.goToFloor(2);
            elevator.goToFloor(3);
            elevator.goToFloor(4);
            elevator.goToFloor(5);
        });

        elevator1.on("floor_button_pressed", function() {
            elevator1.goToFloor(5);
            elevator1.goToFloor(4);
            elevator1.goToFloor(3);
            elevator1.goToFloor(2);
            elevator1.goToFloor(1);
            elevator1.goToFloor(0);
        });

    },  
    update: function(dt, elevators, floors) {
        // We normally don't need to do anything here
    }
}</code></pre>
<p>Challenge 9:</p>

<pre><code>{
    init: function(elevators, floors) {
        log = function() { return console.log.apply(console, arguments); };

         function remove(arr, item) {
          for(var i = arr.length; i--;) {
              if(arr[i] === item) {
                  arr.splice(i, 1);
              }
          }
        }

        function updateIndicator(elevator) {
            // Always "stopped"? Need to determine destination from destination queue?
            if(elevator.destinationDirection() == "up") {
                elevator.goingDownIndicator(false).goingUpIndicator(true);
            } else if(elevator.destinationDirection() == "down") {
                elevator.goingDownIndicator(true).goingUpIndicator(false);
            } else {
                // If stopped, will go anywhere.
                elevator.goingDownIndicator(true).goingUpIndicator(true);
            }
        }

        function leastBusy() {
            var least = elevators[0];
            for (var i = elevators.length - 1; i &gt;= 0; i--) {
                if(elevators[i].destinationDirection() == "stopped") {
                    least = elevators[i];
                    break;
                }

                var ll = least.destinationQueue ? 0 : least.destinationQueue.length;
                var itL = elevators[i].destinationQueue ? 0 : elevators[i].destinationQueue.length
                if(ll &gt; itL) {
                    least = elevators[i].destinationQueue
                }
            }
            return least;
        }

        // ELEVATOR EVENTS
        elevators.forEach(function(elevator) { 

            elevator.on("idle", function() {
                log("elevator-"+elevators.indexOf(elevator)+".idle()");
                updateIndicator(elevator);

            });

            elevator.on("floor_button_pressed", function(floorNum) {
                log("elevator-"+elevators.indexOf(elevator)+".floor_button_pressed()")
                this.goToFloor(floorNum);
                log("elevator-"+elevators.indexOf(elevator)+".destinationQueue="+this.destinationQueue);
            });

            elevator.on("passing_floor", function(floorNum, direction) {
                var floor = floors[floorNum];

            });

            elevator.on("stopped_at_floor", function(floorNum) {
                var queue = this.destinationQueue;
                remove(queue, floorNum)
                updateIndicator(elevator);
            });
        });

        // FLOOR EVENTS
        floors.forEach(function(floor) { 
            floor.on("up_button_pressed", function() {
                log("floor-" + this.floorNum() + ".up_button_pressed()")
                var elevator = leastBusy(elevators);
                var queue = elevator.destinationQueue;
                elevator.goToFloor(this.floorNum())

            });
            floor.on("down_button_pressed", function() {
                log("floor-" + this.floorNum() + ".down_button_pressed()")
                var elevator = leastBusy(elevators);
                var queue = elevator.destinationQueue;
                elevator.goToFloor(this.floorNum())
            });
        });
    },
        update: function(dt, elevators, floors) {
            // We normally don't need to do anything here
        }
}</code></pre>
<p>Challenge 10:</p>

<pre><code>{
    init: function(elevators, floors) {
        log = function() { return console.log.apply(console, arguments); };

         function remove(arr, item) {
          for(var i = arr.length; i--;) {
              if(arr[i] === item) {
                  arr.splice(i, 1);
              }
          }
        }

        function updateIndicator(elevator) {
            // Always "stopped"? Need to determine destination from destination queue?
            if(elevator.destinationDirection() == "up") {
                elevator.goingDownIndicator(false).goingUpIndicator(true);
            } else if(elevator.destinationDirection() == "down") {
                elevator.goingDownIndicator(true).goingUpIndicator(false);
            } else {
                // If stopped, will go anywhere.
                elevator.goingDownIndicator(true).goingUpIndicator(true);
            }
        }

        function leastBusy() {
            var least = elevators[0];
            for (var i = elevators.length - 1; i &gt;= 0; i--) {
                if(elevators[i].destinationDirection() == "stopped") {
                    least = elevators[i];
                    break;
                }

                var ll = least.destinationQueue ? 0 : least.destinationQueue.length;
                var itL = elevators[i].destinationQueue ? 0 : elevators[i].destinationQueue.length
                if(ll &gt; itL) {
                    least = elevators[i].destinationQueue
                }
            }
            return least;
        }

        // ELEVATOR EVENTS
        elevators.forEach(function(elevator) { 

            elevator.on("idle", function() {
                log("elevator-"+elevators.indexOf(elevator)+".idle()");
                updateIndicator(elevator);

            });

            elevator.on("floor_button_pressed", function(floorNum) {
                log("elevator-"+elevators.indexOf(elevator)+".floor_button_pressed()")
                this.goToFloor(floorNum);
                log("elevator-"+elevators.indexOf(elevator)+".destinationQueue="+this.destinationQueue);
            });

            elevator.on("passing_floor", function(floorNum, direction) {
                var floor = floors[floorNum];

            });

            elevator.on("stopped_at_floor", function(floorNum) {
                var queue = this.destinationQueue;
                remove(queue, floorNum)
                updateIndicator(elevator);
            });
        });

        // FLOOR EVENTS
        floors.forEach(function(floor) { 
            floor.on("up_button_pressed", function() {
                log("floor-" + this.floorNum() + ".up_button_pressed()")
                var elevator = leastBusy(elevators);
                var queue = elevator.destinationQueue;
                elevator.goToFloor(this.floorNum())

            });
            floor.on("down_button_pressed", function() {
                log("floor-" + this.floorNum() + ".down_button_pressed()")
                var elevator = leastBusy(elevators);
                var queue = elevator.destinationQueue;
                elevator.goToFloor(this.floorNum())
            });
        });
    },
        update: function(dt, elevators, floors) {
            // We normally don't need to do anything here
        }
}</code></pre>