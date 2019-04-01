<!DOCTYPE html>
  <html>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="myCVcss.css">
    </head>
      <body> 
        <h1>MY PERSONAL CV<img class="as"  src="book.jpg" style="width: 115px; height: 95px;"></h1>  
        <div>      
        <p>Welcome to my page.Please, choose from the list below:</p>
          <form action="" method="post">               
            <select name="CVinfo"> 
                <option value="option">Choose:</option>
                <option value="option1"> Personal Details</option>
                <option value="option2">Work Experience</option>
                <option value="option3">Education</option> 
                <option value="option4">Languages</option> 
                <option value="option5">Skills</option>              
            </select>
                <input  class="atv" type="submit" name="submit" value="GO!"/>               
          </form> 
          </div>  
          <div class="a"> 
          <?php  
            if(isset($_POST['CVinfo'])){
                  $select1 = $_POST['CVinfo'];
                  switch ($select1) {
                      case 'option':
                          echo '<p class="ab">Please, choose from</p><p class="ab">the list above if you want</p><p class="ab"> to know about me :)</p><br><br><br> 
                          <div class="aabb"></div>';
                      break;
                      case 'option1': 
                          echo'<p class="ab">First name: Asya</p>
                               <p class="ab">Middle name:  Vaneva</p>
                               <p class="ab">Last name:  Bachvarova</p>
                               <p class="ab">Gender: Female</p>
                               <p class="ab">Birth date: 20.08.1992</p>
                               <p class="ab">I live in:  Sofia/Bulgaria</p>';                           
                      break; 
                      case 'option2':
                          echo '<p class="abcd">Period: July 2018 - December 2018<br>
                                  Job Title:  English translater<br>
                                  Company/Organization: Website<br>
                                  Business sector:  Education, science<br>
                                  Location: Home work<br>
                                  Company size: above 300<br><br>

                                  Period: January 2018 - March 2018<br>
                                  Job Title:  Internship in PHP HTML CSS<br>
                                  Company/Organization: Vsystems<br>
                                  Business sector:  Information technologies<br>
                                  Location: city Sofia<br>
                                  Company size: 5 - 10<br>
                                  Details: website development.HTML, CSS,PHP;<br> 
                                  Windows - the study was advance and basic.</p>';
                      break;
                      case 'option3':
                          echo '<p class="abcd">Period: October 2018 - till now<br>
                                Level:  Master\'s degree<br>
                                School: NBU<br>
                                Location: Software technologies at Internet<br>
                                Description/Main Subjects:  Programming, web design, DB<br>
                                Period: February 2018 - April 2018<br><br>
                                Level:  Professional<br>
                                School: SoftUni<br>
                                Location: city Sofia<br>
                                Description/Main Subjects:  Java<br>
                                Period: October 2013 - October 2017<br><br>
                                Major:  Security of Information<br>
                                Level:  Bachelor\'s degree<br>
                                School: UNIBIT<br>
                                Location: city Sofia<br><br>
                                Period: April 2017 - July 2017<br>
                                Level:  Professional<br>
                                School: Progress<br>
                                Location: city Sofia<br>
                                Description/Main Subjects:C#
                                </p>';
                      break;
                      case 'option4': 
                          echo'<p class="abc">Mother tongue:  Bulgarian</p>
                               <table>
                                  <tr> 
                                    <td>Language</td>
                                    <td>Comprehension</td> 
                                    <td>Speaking</td>
                                    <td>Writing</td>
                                  </tr> 
                                  <tr> 
                                    <td>English</td>
                                    <td>Fluent</td> 
                                    <td>Fluent</td>
                                    <td>Fluent</td>
                                  </tr>
                               </table><br>
                               <p class="abc">Additional Details:I have FCE </p><p class="abc">sertificate (Cambridge-English).</p>';
                       break;
                       case 'option5':
                          echo '<p class="abcd">Computer Skills:Microsoft Word,Excel,Access and Powerpoint (Microsoft office)<br><br> 
                                Driving License:  Yes<br><br><br><br> 
                                <span class="aab"></span><br><br><br> 
                                Categories: B 
                                </p>';
                      break;                      
                      }                                 
                  }  
            ?> 
          </div>          
    </body>
  </html>