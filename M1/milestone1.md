<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Tina Thai (tkt)</td></tr>
<tr><td> <em>Generated: </em> 11/27/2023 3:49:46 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-101-F23/it202-milestone1-deliverable/grade/tkt" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><ol><li>NOTE: You may want to try to capture as much checklist evidence in your screenshots as possible, you do not need individual screenshots and are recommended to combine things when possible. Also, some screenshots may be reused if applicable.</li></ol><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-27T04.32.23image.png.webp?alt=media&token=707e302e-229b-4bd5-ba8f-54aca0c089e6"/></td></tr>
<tr><td> <em>Caption:</em> <p>After hitting register, it shows a message that the email is invalid<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-27T04.33.22image.png.webp?alt=media&token=709e9d9b-123d-42e4-b1d7-e00c25b1d7fa"/></td></tr>
<tr><td> <em>Caption:</em> <p>After hitting the register button, a message has popped up, saying that the<br>passwords must match.  <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-27T04.35.11image.png.webp?alt=media&token=2bcaef5d-4c62-4f5b-be63-aa10f8841d8e"/></td></tr>
<tr><td> <em>Caption:</em> <p>After hitting register, it shows a message that the password is not a<br>good password and the user needs to change it<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-27T04.36.31image.png.webp?alt=media&token=043e89ec-5f4d-477f-ae52-8f634c4674e9"/></td></tr>
<tr><td> <em>Caption:</em> <p>when the username or email is already in the database, a message appears<br>saying that there is a problem registering because the email/username is already taken.<br><br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-27T04.37.52image.png.webp?alt=media&token=7dca7a62-87f9-4a5a-80b3-f26fab938409"/></td></tr>
<tr><td> <em>Caption:</em> <p>In the image, a new user is being registered<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-27T04.39.30image.png.webp?alt=media&token=e219aa80-4811-4e68-aa57-a1062b2126c5"/></td></tr>
<tr><td> <em>Caption:</em> <p>In the latest row on the table, the Test user has been created.<br>The specific row has been checked mark on the side and has been<br>selected by my mouse, therefore has a yellow box around its email.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/tinat10/IT202-101/pull/5">https://github.com/tinat10/IT202-101/pull/5</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>In the register.php file, the form sends its information and allows the user<br>to register a new account if it meets all its requirements. The form<br>has four required parts: email, username, password, and password confirmation. The password and<br>password confirmation must be equal to each other. The email must be a<br>valid email (must have an @ symbol). The email and username must not<br>already exist in the database in order for the user to create a<br>new account.&nbsp;<div><br></div><div>My code also checks the password to see if it is valid<br>(it must be at least 8 characters). Suppose the password and password confirmation<br>are good passwords and match each other (assuming the email and username conditions<br>have passed). In that case, the registration will go through and a new<br>account will be registered.&nbsp; The database is used to check if the username<br>and email are already used and also is used to create a whole<br>new user. If all the conditions are passed and good, we will add<br>a new user to the database with the user&#39;s information.&nbsp;</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-27T20.42.05image.png.webp?alt=media&token=c81595a8-73d4-4f8c-bef4-4f17137801dd"/></td></tr>
<tr><td> <em>Caption:</em> <p>When the password is incorrect, a message appears below stating so. class.uvgrade.com is<br>used here. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-27T04.43.14image.png.webp?alt=media&token=90e0e56f-dbda-4f2a-bfe1-e429b7c8a4da"/></td></tr>
<tr><td> <em>Caption:</em> <p>An account with the email is not found, therefore alerts the user that<br>they have not registered yet.  <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-27T04.44.21image.png.webp?alt=media&token=eeff6d32-de40-49b6-a309-489595780658"/></td></tr>
<tr><td> <em>Caption:</em> <p>After hitting the login button, the user is redirected to the welcoming home<br>page. An array with the user&#39;s data is previewed. The user is logged<br>in. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-27T04.44.38image.png.webp?alt=media&token=a7b54085-7f4d-4a52-90f5-82ff57704483"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is what is typed in before to show what account I am<br>logging into. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/tinat10/IT202-101/pull/5">https://github.com/tinat10/IT202-101/pull/5</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>This form has three parts: email, username, and password. The password is always<br>required. The user can log in using either their username or email. If<br>both the username and email inputs are left blank and the register button<br>is hit (assuming the user typed in a random password), a message appears<br>telling the user that the email and username are blank and must be<br>filled in. The password is checked when the username or email exists in<br>the database. The typed-in password must match the registered password and if it<br>is incorrect, a message appears, reading: &quot;Invalid password&quot;. This is checked in the<br>code by calling the database and checking if the passwords are equal (after<br>the database&#39;s stored password is hashed). If the password typed in is less<br>than 8 characters, then a warning message will show up instead of the<br>&quot;Invalid password&quot; message, stating that the password must be at least 8 characters.<br>the database is used to ensure that the user exists and the log<br>in information that is typed in by the user is correct.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-27T04.46.02image.png.webp?alt=media&token=b367cf22-692a-4d89-b8a5-1e78389de57c"/></td></tr>
<tr><td> <em>Caption:</em> <p>When the user hits the log out button, they are redirected to the<br>login page, but a message is displayed above, stating that they have been<br>logged out. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-27T17.11.30image.png.webp?alt=media&token=229ad9c5-d29f-47c6-8403-048f547d581a"/></td></tr>
<tr><td> <em>Caption:</em> <p>When trying to access a protected page (the home page), no information is<br>displayed and a message says that the user is not logged in. <br><br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/tinat10/IT202-101/pull/5">https://github.com/tinat10/IT202-101/pull/5</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The information will only be displayed if the user is logged in. This<br>is because, in the code, there is an if statement that will not<br>display any user information if the method call&nbsp;is_logged_in() returns false. is_logged_in() is in<br>the users_helpers.php file where it looks to see if the user is logged<br>in and if a session is in progress. Since the user is not<br>logged in, the home page will not display any information. That is a<br>protected page.&nbsp; Additionally, the profile.php page can&#39;t even be accessed when logged out<br>because an if statement redirects you immediately to the login screen if you<br>try to access the page while logged out.&nbsp;<img src="" alt=""><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-27T17.11.40image.png.webp?alt=media&token=36b760b2-f187-44a2-b02d-4fb3ca807cda"/></td></tr>
<tr><td> <em>Caption:</em> <p>same as previous item/task. The logged out individual cannot access the home page<br>and a message is displayed saying so. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-27T19.16.05image.png.webp?alt=media&token=3d331448-6256-4ee8-9886-3024236513f6"/></td></tr>
<tr><td> <em>Caption:</em> <p>The roles are hidden from the non-Admin user. It shows that there are<br>no roles in the list even though there are roles. The message states<br>that this user does not have permission to view this page. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-27T19.17.41image.png.webp?alt=media&token=99813254-cf16-4edb-b81b-49eb2a64e664"/></td></tr>
<tr><td> <em>Caption:</em> <p>The image shows two roles I have added to the table (One being<br>an admin, the other being a customer). The customer role is kind of<br>unnecessary, but I wanted to ensure that it works and I know how<br>to add roles myself. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-27T19.18.55image.png.webp?alt=media&token=436eb06b-a68c-494c-8aaa-3bfb68ff0b7b"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the UserRoles table with valid data. This shows that the account with<br>user ID 59 is the Admin. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-27T19.19.08image.png.webp?alt=media&token=7a30171b-c424-4830-9176-a672193254c7"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows that testuser2 is the Admin because their user ID is 59<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/tinat10/IT202-101/pull/5">https://github.com/tinat10/IT202-101/pull/5</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>Using an if statement, it checks whether or not the user is logged<br>in. The function is_logged_in() checks if a session is in progress which essentially<br>is checking if a user is logged in. If they are not, a<br>message appears to tell the user that they aren&#39;t logged in and don&#39;t<br>have access to the page. This function returns a boolean (true/false), so if<br>the conditional is false, no information will show up.&nbsp;<div><br></div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>For role-protected pages, the if statement if (has_role(&quot;Admin&quot;)) is used to check the<br>role of the logged in user. This function is in the users_helpers.php file<br>where it looks into the database and finds out the roles of the<br>logged in user. It takes in a parameter to check if the role<br>of the user is equal to the role we are checking for. Then<br>it returns a boolean depending on whether the roles are equal or not.<br>If the user is an Admin, they have access to the list_roles and<br>create_role pages. However, if they don&#39;t have access, they cannot view these pages<br>and a message appears on their screen telling them so.&nbsp;<div><br></div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-27T05.03.22image.png.webp?alt=media&token=f3a6faa8-d72d-4904-baab-294014f18127"/></td></tr>
<tr><td> <em>Caption:</em> <p>displaying my website. this is the style/theme I was going for. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-27T05.04.38image.png.webp?alt=media&token=8c19fb0d-a4df-443c-9731-eef0f96f2a7e"/></td></tr>
<tr><td> <em>Caption:</em> <p>displaying my website. this is the style/theme I was going for. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/tinat10/IT202-101/pull/5">https://github.com/tinat10/IT202-101/pull/5</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>I wanted a cute, but simple layout. I changed the font to &quot;cursive&quot;<br>in the CSS. I will add more as I continue working on the<br>project, but for right now, I wanted to give the website a friendly,<br>welcoming theme. I think I will do a flower shop or a coffee<br>shop idea. For the navigation bar, if you hover over it, the text<br>changes colors (making it more user-friendly). I did this by using&nbsp; .navBar a:hover<br>and setting the color to red. This is in nav.php, so the CSS<br>for the navbar specifically doesn&#39;t have to be on every page.&nbsp;<div><br></div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-27T19.21.25Screenshot%202023-11-27%20121125.png.webp?alt=media&token=805c3b7e-d4bd-4884-9541-d95dfa86759f"/></td></tr>
<tr><td> <em>Caption:</em> <p>This image shows that when attempting to access the home page, you are<br>unable to because  the user is not logged in. A message is<br>displayed stating exactly so. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-27T19.21.50Screenshot%202023-11-27%20141553.png.webp?alt=media&token=72fbe78e-d3cc-42d7-9762-32405e22e043"/></td></tr>
<tr><td> <em>Caption:</em> <p>This image shows that because the user is not an Administrator, they cannot<br>view/access the roles list. A message at the top of the page explains<br>this and the list of roles appears to be blank even though it<br>actually is not. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-27T19.24.26image.png.webp?alt=media&token=8964fd98-ed44-4cde-a48d-daf86dc15f73"/></td></tr>
<tr><td> <em>Caption:</em> <p>When attempting to sign in, I left the email and username blank and<br>typed in something random for the password. Upon hitting login, a message appeared<br>saying I must type in an email or username. This is a message<br>to tell the user that you have to have at least one of<br>those params typed in in order to log in.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/tinat10/IT202-101/pull/5">https://github.com/tinat10/IT202-101/pull/5</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>We have been using if statements to identify errors and echo statements to<br>display messages to the user about what they are doing wrong. I use<br>a nice tone when writing the message so that the website seems more<br>professional and friendly.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-27T05.00.03image.png.webp?alt=media&token=a088898e-bb78-4d48-b6c1-8faed93db826"/></td></tr>
<tr><td> <em>Caption:</em> <p>When clicking on profile, the email and username are prefilled. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/tinat10/IT202-101/pull/5">https://github.com/tinat10/IT202-101/pull/5</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>We set two variables to the function calls get_user_email() and get_username() that return<br>the username and email. This function is created in the user_helpers.php where the<br>user that is in the session&#39;s information is retrieved and returned. Then, in<br>the HTML, we set the input tags&#39; value to these variables, so that<br>they are &quot;prefilled&quot; when the user accesses the profile page.&nbsp;<div><br></div><div>$email = get_user_email();<div>$username =<br>get_username();</div><div><br></div><div><div><div>&lt;input type=&quot;email&quot; name=&quot;email&quot; id=&quot;email&quot; value=&quot;&lt;?php se($email); ?&gt;&quot; /&gt;</div></div><div>&lt;input type=&quot;text&quot; name=&quot;username&quot; id=&quot;username&quot; value=&quot;&lt;?php se($username);<br>?&gt;&quot; /&gt;<br></div><div><br></div></div></div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-27T19.35.50image.png.webp?alt=media&token=00cbf98c-ba66-48cb-b469-f49e7c8ffaa0"/></td></tr>
<tr><td> <em>Caption:</em> <p>In this image, the code for this section is shown. During class, we<br>discussed how errorInfo is causing trouble and we don&#39;t really know why or<br>where. So, technically the error messages are causing some issues for this part<br>of the project. The messages part is messed up, however, the actual functionality<br>of the profile page works perfectly fine.  <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-27T19.38.39image.png.webp?alt=media&token=0391b71e-11b9-41eb-9792-c4b1e92a6195"/></td></tr>
<tr><td> <em>Caption:</em> <p>When the profile updates correctly, the message &quot;Profile successfully saved&quot; appears. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-27T04.57.16image.png.webp?alt=media&token=5dd7ea8b-2c30-4849-9e11-f2d9a5e62c53"/></td></tr>
<tr><td> <em>Caption:</em> <p>Before Picture: In this photo, the username is Test and has yet to<br>be changed. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-27T04.58.17image.png.webp?alt=media&token=68491415-e922-4f8e-87b3-67e0204d78cf"/></td></tr>
<tr><td> <em>Caption:</em> <p>After picture: In this photo, the username has been changed to TestTestTest. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/tinat10/IT202-101/pull/5">https://github.com/tinat10/IT202-101/pull/5</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <div>The line of code:&nbsp;<span style="background-color: rgb(31, 31, 31); font-family: Consolas, &quot;Courier New&quot;, monospace;<br>white-space: pre; color: rgb(212, 212, 212);">&nbsp; &nbsp; </span><span style="background-color: rgb(31, 31, 31); font-family:<br>Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(156, 220, 254);">$stmt</span><span style="background-color: rgb(31, 31,<br>31); font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(212, 212, 212);"> =<br></span><span style="background-color: rgb(31, 31, 31); font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color:<br>rgb(156, 220, 254);">$db</span><span style="background-color: rgb(31, 31, 31); font-family: Consolas, &quot;Courier New&quot;, monospace; white-space:<br>pre; color: rgb(212, 212, 212);">-&gt;</span><span style="background-color: rgb(31, 31, 31); font-family: Consolas, &quot;Courier New&quot;,<br>monospace; white-space: pre; color: rgb(220, 220, 170);">prepare</span><span style="background-color: rgb(31, 31, 31); font-family: Consolas,<br>&quot;Courier New&quot;, monospace; white-space: pre; color: rgb(212, 212, 212);">(</span><span style="background-color: rgb(31, 31, 31);<br>font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(206, 145, 120);">"</span><span style="background-color: rgb(31,<br>31, 31); font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(86, 156, 214);">UPDATE</span><span<br>style="background-color: rgb(31, 31, 31); font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(206,<br>145, 120);"> Users </span><span style="background-color: rgb(31, 31, 31); font-family: Consolas, &quot;Courier New&quot;, monospace;<br>white-space: pre; color: rgb(86, 156, 214);">set</span><span style="background-color: rgb(31, 31, 31); font-family: Consolas, &quot;Courier<br>New&quot;, monospace; white-space: pre; color: rgb(206, 145, 120);"> email </span><span style="background-color: rgb(31, 31,<br>31); font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(212, 212, 212);">=</span><span style="background-color:<br>rgb(31, 31, 31); font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(206, 145,<br>120);"> :email, username </span><span style="background-color: rgb(31, 31, 31); font-family: Consolas, &quot;Courier New&quot;, monospace;<br>white-space: pre; color: rgb(212, 212, 212);">=</span><span style="background-color: rgb(31, 31, 31); font-family: Consolas, &quot;Courier<br>New&quot;, monospace; white-space: pre; color: rgb(206, 145, 120);"> :username </span><span style="background-color: rgb(31, 31,<br>31); font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(86, 156, 214);">where</span><span style="background-color:<br>rgb(31, 31, 31); font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(206, 145,<br>120);"> </span><span style="background-color: rgb(31, 31, 31); font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre;<br>color: rgb(86, 156, 214);">id</span><span style="background-color: rgb(31, 31, 31); font-family: Consolas, &quot;Courier New&quot;, monospace;<br>white-space: pre; color: rgb(206, 145, 120);"> </span><span style="background-color: rgb(31, 31, 31); font-family: Consolas,<br>&quot;Courier New&quot;, monospace; white-space: pre; color: rgb(212, 212, 212);">=</span><span style="background-color: rgb(31, 31, 31);<br>font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(206, 145, 120);"> :</span><span style="background-color:<br>rgb(31, 31, 31); font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(86, 156,<br>214);">id</span><span style="background-color: rgb(31, 31, 31); font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color:<br>rgb(206, 145, 120);">"</span><span style="background-color: rgb(31, 31, 31); font-family: Consolas, &quot;Courier New&quot;, monospace; white-space:<br>pre; color: rgb(212, 212, 212);">);</span></div><div style="color: rgb(204, 204, 204); background-color: rgb(31, 31, 31);<br>font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;"><div><span style="color: #d4d4d4;"></span></div></div><div><br></div><div>This line updates<br>the username and email when you push the Update Profile button. If it<br>updates correctly (meaning the email or username is not already taken), a message<br>appears saying that the Profile Successfully Saved. The email is also validated to<br>ensure that the email has an @ symbol (ensures that the input is<br>a correct email address).&nbsp; For the password, this is where the errorInfo variable<br>messes up the messages. However, the functionality of saving the password is correct.<br>If the current password is correct and the new password and confirm password<br>inputs equal each other, the new password will be set.&nbsp; This is done<br>with a series of if statements that unhash the stored current password and<br>check that the current password input is equal to it. The new password<br>and confirm password inputs must be equal in order to save the new<br>password. The following line of code updates the database.&nbsp;</div><div><br></div><div><div style="color: rgb(204, 204, 204);<br>background-color: rgb(31, 31, 31); font-family: Consolas, &quot;Courier New&quot;, monospace; line-height: 19px; white-space: pre;"><div><span<br>style="color: #d4d4d4;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br></span><span style="color: #9cdcfe;">$query</span><span style="color: #d4d4d4;"> = </span><span style="color: #ce9178;">"</span><span style="color: #569cd6;">UPDATE</span><span style="color: #ce9178;"><br>Users </span><span style="color: #569cd6;">set</span><span style="color: #ce9178;"> </span><span style="color: #569cd6;">password</span><span style="color: #ce9178;"> </span><span style="color:<br>#d4d4d4;">=</span><span style="color: #ce9178;"> :</span><span style="color: #569cd6;">password</span><span style="color: #ce9178;"> </span><span style="color: #569cd6;">where</span><span style="color: #ce9178;"><br></span><span style="color: #569cd6;">id</span><span style="color: #ce9178;"> </span><span style="color: #d4d4d4;">=</span><span style="color: #ce9178;"> :</span><span style="color: #569cd6;">id</span><span<br>style="color: #ce9178;">"</span><span style="color: #d4d4d4;">;</span></div></div></div><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Issues and Project Board </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Ftkt%2F2023-11-27T20.34.45image.png.webp?alt=media&token=84a49f28-479c-42e2-b3e6-6ccc41d45328"/></td></tr>
<tr><td> <em>Caption:</em> <p>The errorInfo is causing issues. There are 3 issues in the profile.php <br>Everything else that was in the Milestone 1 project paper has been completed<br>and works correctly. <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Include a direct link to your Project Board</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/tinat10/IT202-101/pull/5">https://github.com/tinat10/IT202-101/pull/5</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Prod Application Link to Login Page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="http://class.uvgrade.com/tkt/M1/login.php">http://class.uvgrade.com/tkt/M1/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-101-F23/it202-milestone1-deliverable/grade/tkt" target="_blank">Grading</a></td></tr></table>