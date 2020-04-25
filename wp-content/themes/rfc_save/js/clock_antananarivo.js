/*
 * Starts any clocks using the user's local time
 * From: cssanimation.rocks/clocks
 */
function initLocalClocks_antananarivo() {
  // Get the local time using JS
  var date = new Date;
	var utc = date.getTime() + (date.getTimezoneOffset() * 60000);
	var nd = new Date(utc + (3600000*0));



  var seconds = nd.getSeconds();
  var minutes = nd.getMinutes();
  var hours = nd.getHours();

  // Create an object with each hand and it's angle in degrees
  var hands = [
    {
      hand: 'hours-antananarivo',
      angle: (hours * 30) + (minutes / 2)
    },
    {
      hand: 'minutes-antananarivo',
      angle: (minutes * 6)
    },
    {
      hand: 'seconds-antananarivo',
      angle: (seconds * 6)
    }
  ];
  // Loop through each of these hands to set their angle
  for (var j = 0; j < hands.length; j++) {
    var elements = document.querySelectorAll('.' + hands[j].hand);
    for (var k = 0; k < elements.length; k++) {
        elements[k].style.webkitTransform = 'rotateZ('+ hands[j].angle +'deg)';
        elements[k].style.transform = 'rotateZ('+ hands[j].angle +'deg)';
        // If this is a minute hand, note the seconds position (to calculate minute position later)
        if (hands[j].hand === 'minutes') {
          elements[k].parentNode.setAttribute('data-second-angle', hands[j + 1].angle);
        }
    }
  }
}

/*
 * Set a timeout for the first minute hand movement (less than 1 minute), then rotate it every minute after that
 */
function setUpMinuteHands_antananarivo() {
  // Find out how far into the minute we are
  var containers = document.querySelectorAll('.minutes-container-antananarivo');
  var secondAngle = containers[0].getAttribute("data-second-angle");
  if (secondAngle > 0) {
    // Set a timeout until the end of the current minute, to move the hand
    var delay = (((360 - secondAngle) / 6) + 0.1) * 1000;
    setTimeout(function() {
      moveMinuteHands_antananarivo(containers);
    }, delay);
  }
}

/*
 * Do the first minute's rotation
 */
function moveMinuteHands_antananarivo(containers) {
  for (var i = 0; i < containers.length; i++) {
    containers[i].style.webkitTransform = 'rotateZ(6deg)';
    containers[i].style.transform = 'rotateZ(6deg)';
  }
  // Then continue with a 60 second interval
  setInterval(function() {
    for (var i = 0; i < containers.length; i++) {
      if (containers[i].angle === undefined) {
        containers[i].angle = 12;
      } else {
        containers[i].angle += 6;
      }
      containers[i].style.webkitTransform = 'rotateZ('+ containers[i].angle +'deg)';
      containers[i].style.transform = 'rotateZ('+ containers[i].angle +'deg)';
    }
  }, 60000);
}

/*
 * Move the second containers
 */
function moveSecondHands_antananarivo() {
  var containers = document.querySelectorAll('.seconds-container-antananarivo');
  setInterval(function() {
    for (var i = 0; i < containers.length; i++) {
      if (containers[i].angle === undefined) {
        containers[i].angle = 6;
      } else {
        containers[i].angle += 6;
      }
      containers[i].style.webkitTransform = 'rotateZ('+ containers[i].angle +'deg)';
      containers[i].style.transform = 'rotateZ('+ containers[i].angle +'deg)';
    }
  }, 1000);
}

initLocalClocks_antananarivo();
setUpMinuteHands_antananarivo();
moveSecondHands_antananarivo();

