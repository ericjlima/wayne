<html>
                <head>
                  <title>Contact Us form</title>
                </head>
				<input type="hidden" name="pageaction" value="sendValue" />

				<input type="hidden" class="txtinput" name="txtBusiness" value="Bently Nevada" />
				<input type="hidden" class="txtinput" name="txtProdCat" value="Software" />
				<input type="hidden" class="txtinput" name="demoProd" value="System 1 Software" />
				
                <body style='font-family: Arial, Helvetica, sans-serif;font-size:12px;'>
                  Dear Customer Support,
                  <p>Please check the details :</p>
                  <table align=left style='font-family: Arial, Helvetica, sans-serif;font-size:12px;'>
                    <tr>
                      <th align=left>First Name :</th><td>"<?php echo html_entity_decode(stripslashes($firstName))?>."</td>
                    </tr>
                    <tr>
                      <th align=left>Last Name :</th><td>"<?php echo html_entity_decode(stripslashes($lastName))?>."</td>
                    </tr>
                                        <tr>
                      <th align=left>Company :</th><td>"<?php echo html_entity_decode(stripslashes($company))?>."</td>
                    </tr>
                    <tr>
                      <th align=left>Email :</th><td>"<?php echo html_entity_decode(stripslashes($email))?>."</td>
                    </tr>
                    <tr>
                      <th align=left>Phone :</th><td>"<?php echo html_entity_decode(stripslashes(!empty($phone)?$phone:'Phone was left empty'))?>."</td>
                    </tr>
                    <tr>
                      <th align=left>Address :</th><td>"<?php echo html_entity_decode(stripslashes(!empty($streetAddress1)?$streetAddress1:'Street Address 1 was left empty'))?>." " <?php echo html_entity_decode(stripslashes(!empty($streetAddress2)?$streetAddress2:'Street Address 2 was left empty'))?>." " <?php echo html_entity_decode(stripslashes(!empty($city)?$city:'City was left empty.'))?> " " <?php echo html_entity_decode(stripslashes($state))?> " " <?php echo html_entity_decode(stripslashes($zip))?>"</td>
                    </tr>
                                        <tr>
                      <th align=left>Country :</th><td>"<?php echo html_entity_decode(stripslashes($country))?>."</td>
                    </tr>
                                        <tr>
                      <th align=left>Preferred Method of Contact :</th><td>"<?php echo html_entity_decode(stripslashes(!empty($preferred)?$preferred:'Preferred Contact was left empty'))?>."</td>
                    </tr>
					 <tr>
                      <th align=left>Business Type :</th><td>"Sensors & Measurement."</td>
                    </tr>
										 <tr>
                      <th align=left>Product Category :</th><td>"Moisture Meters."</td>
                    </tr>
										 <tr>
                      <th align=left>Specific Product :</th><td>"Protimeter."</td>
                    </tr>
                                        <tr>
                      <th align=left valign=top>Customer details :</th><td>"<?php echo html_entity_decode(stripslashes($message))?>."</td>
                    </tr>
                                        <tr>
                      <td colspan=2> </td>
                    </tr>
                    <tr>
                      <td colspan=2> </td>
                    </tr>
                    <tr>
                      <td colspan=2> </td>
                    </tr>
                    <tr>
                      <td colspan=2><p>Thanks & Regards,<br/>
                       GE Measurement & Control Solutions
                    </p></td>
                    </tr>
                                   </table>
                                 </body>
                                </html>