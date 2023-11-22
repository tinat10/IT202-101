<table><tr><td> <em>Assignment: </em> HW HTML5 Canvas Game</td></tr>
<tr><td> <em>Student: </em> Tina Thai (tkt)</td></tr>
<tr><td> <em>Generated: </em> 11/22/2023 11:46:55 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-101-F23/hw-html5-canvas-game/grade/tkt" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Create a branch for this assignment called&nbsp;<em>M6-HTML5-Canvas</em></li><li>Pick a base HTML5 game from&nbsp;<a href="https://bencentra.com/2017-07-11-basic-html5-canvas-games.html">https://bencentra.com/2017-07-11-basic-html5-canvas-games.html</a></li><li>Create a folder inside public_html called&nbsp;<em>M6</em></li><li>Create an html5.html file in your M6 folder (do not put it in Project even if you're doing arcade)</li><li>Copy one of the base games (from the above link)</li><li>Add/Commit the baseline of the game you'll mod for this assignment&nbsp;<em>(Do this before you start any mods/changes)</em></li><li>Make two significant changes<ol><li>Static changes like hard-coded colors/values will not count at all (i.e., changing shapes/colors/values that are globally defined and set only once.</li><li>Direct copies of my class example changes will not be accepted (i.e., just having an AI player for pong, rotating canvas, or multi-ball unless you make a significant tweak to it)</li><li>Significant changes are things that change with game logic or modify how the game works. Static changes like hard-coded colors/values will not count at all (i.e., changing shapes/colors/values that are globally defined and set only once). You may however change such values through game logic during runtime. (i.e., when points are scored, boundaries are hit, some action occurs, etc)</li></ol></li><li>Evidence/Screenshots<ol><li>As best as you can, gather evidence for your first significant change and fill in the deliverable items below.</li><li>As best as you can, gather evidence for your significant change and fill in the deliverable items below.</li><li>Remember to include your ucid/date as comments in any screenshots that have code</li><li>Ensure your screenshots load and are visible from the md file in step 9</li></ol></li><li>In the M6 folder create a new file called m6_submission.md</li><li>Save your below responses, generate the markdown, and paste the output to this file</li><li>Add/commit/push all related files as necessary</li><li>Merge your pull request once you're satisfied with the .md file and the canvas game mods</li><li>Create a new pull request from dev to prod and merge it</li><li>Locally checkout dev and pull the merged changes from step 12</li></ol><p>Each missed or failed to follow instruction is eligible for -0.25 from the final grade</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Game Info </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What game did you pick to edit/modify?</td></tr>
<tr><td> <em>Response:</em> <p>I chose the Collect the Squares game to edit/modify.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the direct link to the html5.html file from Heroku Prod (i.e., https://mt85-prod.herokuapp.com/M6/html5.html)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/tinat10/IT202-101/pull/4">https://github.com/tinat10/IT202-101/pull/4</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the pull request link for this assignment from M6-HTML5-Canvas to dev</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/tinat10/IT202-101/pull/4">https://github.com/tinat10/IT202-101/pull/4</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Significant Change #1 </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe your change/modification</td></tr>
<tr><td> <em>Response:</em> <p>The first change I completed was the creation of blue squares that deduct<br>a point when the red user square intersects it. Like the target square,<br>it randomly spawns in different locations and will respawn if the red user<br>square touches it.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot of the change while playing (try your best as some changes may be nearly impossible to capture)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-21T21.23.20Screenshot%20(84).png.webp?alt=media&token=3f89a57b-c629-413c-a92c-16473e197738"/></td></tr>
<tr><td> <em>Caption:</em> <p>This image shows the before the user touches the blue square. The score<br>is currently 4. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-21T21.23.44Screenshot%20(85).png.webp?alt=media&token=e0e91d74-8fde-4eab-a1ae-528fe50d9991"/></td></tr>
<tr><td> <em>Caption:</em> <p>This image shows the aftermath. The user has touched the blue square which<br>has now respawned in a different random location. The score has decremented by<br>1, being 3 now. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot of the relevant lines of code that implement your change (make sure your ucid and the date are shown in comments) In the caption briefly describe/explain how the code snippet works.</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-21T21.33.08Screenshot%20(87).png.webp?alt=media&token=3cc24cd9-70fb-440c-8edf-89b301fcb856"/></td></tr>
<tr><td> <em>Caption:</em> <p>The code here creates the blue rectangle/square and displays it on the canvas.<br>It sets it to the correct dimensions and color. In the if statement,<br>it checks if the user&#39;s red square ever intersects with the blue square,<br>decrementing the score when it does. It also calls moveBadSquare() there, so a<br>new blue square will be spawned when the two squares touch. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-21T21.33.03Screenshot%20(88).png.webp?alt=media&token=64af8b9a-3f38-480c-9267-43a65f5a0fb0"/></td></tr>
<tr><td> <em>Caption:</em> <p>The code focused here is the moveBadSquare() function where I set the position<br>of the blue squares when it is spawning. It is done randomly and<br>rounded using Math.random() and Math.round()<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Significant Change #2 </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe your change/modification</td></tr>
<tr><td> <em>Response:</em> <p>The second change of mine was creating a moving enemy square. It is<br>a grey square that is the same size as the user. It moves<br>vertically and if its path intersects with the user&#39;s, then the game ends,<br>regardless if time has run out. The movement of the enemy square is<br>independent of the user&#39;s.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot of the change while playing (try your best as some changes may be nearly impossible to capture)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-21T21.39.04Screenshot%20(95).png.webp?alt=media&token=2742c93a-d3e4-455f-bc64-42a34916ab89"/></td></tr>
<tr><td> <em>Caption:</em> <p>The grey square is the vertically moving square. It moves on its own,<br>independent of red square&#39;s movements. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-21T21.39.10Screenshot%20(96).png.webp?alt=media&token=9f743e83-c370-4983-81c0-e2bef40e4c8f"/></td></tr>
<tr><td> <em>Caption:</em> <p>When the red square intersects paths with the grey square, the game ends<br>and a message is displayed. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot of the relevant lines of code that implement your change (make sure your ucid and the date are shown in comments) In the caption briefly describe/explain how the code snippet works.</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-21T21.34.47Screenshot%20(89).png.webp?alt=media&token=b174f371-c495-4b5a-b649-94ab006529a2"/></td></tr>
<tr><td> <em>Caption:</em> <p>I added some code to the endGame() function, so that the game will<br>end properly if the user is killed by the grey evil square. <br>I also initialized a variable killed to be set to false in the<br>beginning and when the user is killed, it will be set to true<br>and the message will be displayed on the screen.  <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-21T21.34.51Screenshot%20(90).png.webp?alt=media&token=2e702b2c-4420-480b-883e-9857d1942845"/></td></tr>
<tr><td> <em>Caption:</em> <p>This code draws the grey evil square with the same dimensions as the<br>user&#39;s (length of 50). In the if statement, if the grey and user&#39;s<br>squares intersect, then the killed var is set to true and endGame() is<br>called.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-21T21.34.57Screenshot%20(91).png.webp?alt=media&token=ca971c2d-0f01-4c90-b4fa-cc7f9e599b7c"/></td></tr>
<tr><td> <em>Caption:</em> <p>This code is what allows the evil square to move independently. It shifts<br>the y position of the square by adding a var speed of 3.0<br>to the position.  <br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Discuss </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Talk about what you learned during this assignment and the related HTML5 Canvas readings (at least a few sentences for full credit)</td></tr>
<tr><td> <em>Response:</em> <p>I learned how to use Canvas in Javascript and how I can get<br>canvases to display using HTML. I am able to create rectangles of many<br>sizes, as well as other shapes (despite not using any other shapes besides<br>rectangles). I also learned the countdown feature in JavaScript that I can use<br>as a timer. The assignment overall did help me see how javascript intersects<br>with HTML, especially for websites that are mostly gaming ones.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-101-F23/hw-html5-canvas-game/grade/tkt" target="_blank">Grading</a></td></tr></table>