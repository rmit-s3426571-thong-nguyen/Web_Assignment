<div id="two-clumns" class="gid-contaniner" style="display: block;">
				<h2>Our Movies Range</h2>
					<ul class="rig columns-2">
						<li>
                            <!--image below sourced from http://cdn.wegotthiscovered.com/wp-content/uploads/avengers-2-age-of-ultron-it-s-going-to-be-bigger-better-and-with-a-lot-more-hawkeye-27a0fae2-4330-484c-9560-6fdb3afc2408.png-->
							<img src="../images/avengers.png" alt="Avengers"/>
							<h3>Avengers</h3>
							
							<p>When Tony Stark tries to jumpstart a dormant peacekeeping program, things go awry and it is up to the Avengers to stop the villainous Ultron from enacting his terrible plans.</p>
							
							<!--Code below sourced and modified from http://www.webdesignerdepot.com/2012/10/creating-a-modal-window-with-html5-and-css3/-->
							<ul class="links">
								<li><a href="#pop2">Buy Tickets</a></li>
							</ul>
							
							
						
							<input type="button" value="More Details" class="button" />
							<div class="htmlstring"> 
								   
							</div>								
							
							<div id="pop2" class="pop-up">
								<div class="popBox">
									<div class="popScroll"> 

										<form action="http://titan.csit.rmit.edu.au/~e54061/wp/form-tester-2.php" method="post" target="_blank">
											<table class="buy1">
												<tr>
													<th>
														Movie: Avengers<input type="hidden" name="film" value="AC">
													</th>
													<th>
														Day:
														 <select name="day">	 
														  <option value="">Select a day</option>		 
														 <option value="Wednesday">Wednesday</option>
														  <option value="Thursday">Thursday</option>
														  <option value="Friday">Friday</option>
														  <option value="Saturday">Saturday</option>
														  <option value="Sunday">Sunday</option>
														</select>
													</th>
													<th>
														Session: 9pm<input type="hidden" name="time" value="9pm">
														
													</th>
													
												</tr>
											</table>
											<table class="buy2">
												<thead>
													<tr>
														<td>Ticket Type</td>
														<td>Ticket Cost</td>
														<td>Quantity</td>
														<td> Subtotal Price</td>	
													</tr>
												</thead>
												<tbody>
													<tr>
											            <td>Adult</td>
											            <td>
											                <input type="hidden"  class="cost" value="18" >$<span>18.00</span>
											
											            </td>
											            <td>
											                <input type="number"  class="quantity" value="0" min="0" max="30" name="SA">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr>
											        <tr>
											            <td>Concession</td>
											            <td>
											                <input type="hidden" class="cost" value="15">$<span>15.00</span>
											
											            </td>
											            <td>
											                <input type="number" class="quantity" value="0" min="0" max="30" name="SP">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr>
											        <tr>
											            <td>Child</td>
											            <td>
											                <input type="hidden" class="cost" value="12">$<span>12.00</span>
											
											            </td>
											            <td>
											                <input type="number"  class="quantity" value="0" min="0" max="30" name="SC">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr>
											        <tr>
											            <td>First Class Adult</td>
											            <td>
											                <input type="hidden" class="cost" value="30">$<span>30.00</span>
											
											            </td>
											            <td>
											                <input type="number" class="quantity" value="0" min="0" max="30" name="FA">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr> 
											        <tr>
											            <td>First Class Child</td>
											            <td>
											                <input type="hidden" class="cost" value="25">$<span>25.00</span>
											
											            </td>
											            <td>
											                <input type="number"  class="quantity" value="0" min="0" max="30" name="FC">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr>
											        <tr>
											            <td>Beanbag - 1 Person</td>
											            <td>
											                <input type="hidden" class="cost" value="30">$<span>30.00</span>
											
											            </td>
											            <td>
											                <input type="number" class="quantity" value="0" min="0" max="30" name="B1">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr>
											        <tr>
											            <td>Beanbag - 2 People</td>
											            <td>
											                <input type="hidden" class="cost" value="30">$<span>30.00</span>
											
											            </td>
											            <td>
											                <input type="number" class="quantity" value="0" min="0" max="30" name="B2">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr>
											        <tr>
											            <td>Beanbag - 3 Children</td>
											            <td>
											                <input type="hidden" class="cost" value="30">$<span>30.00</span>
											
											            </td>
											            <td>
											                <input type="number" class="quantity" value="0" min="0" max="30" name="B3">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr>
											        <tr>
														<td>
														</td>
														<td></td>
														<td>Total Price:</td>
															
														<td>
															<input type="hidden" id="newTotalPriceAC" name="price">
															<span id="showTotalPriceAC"></span>
														</td>
													</tr>											
											    </tbody>
											</table>
											
										<input type="submit" value="Buy Tickets" />
										</form>
										
									</div>
									<a href="" class="close"><span></span></a>
  								</div>
  								<a href="#links" class="lightbox">Back to links</a>
							</div>		
						</li>
						<li>
                            <!--image below sourced from http://d2wfjdhvqgsqdc.cloudfront.net/Site-1012/big_hero_6_thumbnail.jpg-->
							<img src="../images/bighero6.jpg" alt="Big Hero 6"/>
							<h3>Big Hero 6</h3>
							
							<p>The special bond that develops between plus-sized inflatable robot Baymax, and prodigy Hiro Hamada, who team up with a group of friends to form a band of high-tech heroes.</p>
							
							<ul class="links">
								<li><a href="#pop3">Buy Tickets</a></li>
							</ul>
							<input type="button" value="More Details" class="button2" />
							<div class="htmlstring2"> 
								   
							</div>
							<div id="pop3" class="pop-up">
								<div class="popBox">
									<div class="popScroll"> 

										<form action="http://titan.csit.rmit.edu.au/~e54061/wp/form-tester-2.php" method="post" target="_blank">
											<table class="buy1">
												<tr>
													<th>
														Movie: Big Hero 6<input type="hidden" name="film" value="CH">
													</th>
													<th>
														Day:
														 <select name="day">	 
														  <option value="">Select a day</option>
														  <option value="Monday">Monday</option>
														  <option value="Tuesday">Tuesday</option>		 
														  <option value="Wednesday">Wednesday</option>
														  <option value="Thursday">Thursday</option>
														  <option value="Friday">Friday</option>
														  <option value="Saturday">Saturday</option>
														  <option value="Sunday">Sunday</option>
														</select>
													</th>
													<th>
														Session: 
														<select name="time">	 
														  <option value="">Select a session</option>
														  <option value="1pm">Monday-1pm</option>
														  <option value="1pm">Tuesday-1pm</option>		 
														  <option value="6pm">Wednesday-6pm</option>
														  <option value="6pm">Thursday-6pm</option>
														  <option value="6pm">Friday-6pm</option>
														  <option value="12pm">Saturday-12pm</option>
														  <option value="12pm">Sunday-12pm</option>
														</select>
														
													</th>
													
												</tr>
											</table>
											<table class="buy2">
												<thead>
													<tr>
														<td>Ticket Type</td>
														<td>Ticket Cost</td>
														<td>Quantity</td>
														<td> Subtotal Price</td>	
													</tr>
												</thead>
												<tbody>
													<tr>
											            <td>Adult</td>
											            <td>
											                <input type="hidden"  class="cost" value="18" >$<span>18.00</span>
											
											            </td>
											            <td>
											                <input type="number"  class="quantity" value="0" min="0" max="30" name="SA">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr>
											        <tr>
											            <td>Concession</td>
											            <td>
											                <input type="hidden" class="cost" value="15">$<span>15.00</span>
											
											            </td>
											            <td>
											                <input type="number" class="quantity" value="0" min="0" max="30" name="SP">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr>
											        <tr>
											            <td>Child</td>
											            <td>
											                <input type="hidden" class="cost" value="12">$<span>12.00</span>
											
											            </td>
											            <td>
											                <input type="number"  class="quantity" value="0" min="0" max="30" name="SC">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr>
											        <tr>
											            <td>First Class Adult</td>
											            <td>
											                <input type="hidden" class="cost" value="30">$<span>30.00</span>
											
											            </td>
											            <td>
											                <input type="number" class="quantity" value="0" min="0" max="30" name="FA">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr> 
											        <tr>
											            <td>First Class Child</td>
											            <td>
											                <input type="hidden" class="cost" value="25">$<span>25.00</span>
											
											            </td>
											            <td>
											                <input type="number"  class="quantity" value="0" min="0" max="30" name="FC">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr>
											        <tr>
											            <td>Beanbag - 1 Person</td>
											            <td>
											                <input type="hidden" class="cost" value="30">$<span>30.00</span>
											
											            </td>
											            <td>
											                <input type="number" class="quantity" value="0" min="0" max="30" name="B1">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr>
											        <tr>
											            <td>Beanbag - 2 People</td>
											            <td>
											                <input type="hidden" class="cost" value="30">$<span>30.00</span>
											
											            </td>
											            <td>
											                <input type="number" class="quantity" value="0" min="0" max="30" name="B2">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr>
											        <tr>
											            <td>Beanbag - 3 Children</td>
											            <td>
											                <input type="hidden" class="cost" value="30">$<span>30.00</span>
											
											            </td>
											            <td>
											                <input type="number" class="quantity" value="0" min="0" max="30" name="B3">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr>
											        <tr>
														<td>
														</td>
														<td></td>
														<td>Total Price:</td>
															
														<td>
															<input type="hidden" id="newTotalPriceCH" name="price">
															<span id="showTotalPriceCH"></span>
														</td>
													</tr>											
											    </tbody>
											</table>
											

											<input type="submit" value="Buy Tickets" />
										</form>
										
									</div>
									<a href="" class="close"><span></span></a>
  								</div>
  								<a href="#links" class="lightbox">Back to links</a>
							</div>	
						</li>	
						<li>
                            <!--image below sourced from http://cdn3-www.comingsoon.net/assets/uploads/2015/01/The-Wedding-Ringer-Bar-640.jpg-->
							<img src="../images/wedding.jpg" alt="The Wedding Ringer"/>
							<h3>The Wedding Ringer</h3>
							
							<p>Two weeks shy of his wedding, a socially awkward guy enters into a charade by hiring the owner of a company that provides best men for grooms in need.         </p>
							
							<ul class="links">
								<li><a href="#pop4">Buy Tickets</a></li>
							</ul>
							<input type="button" value="More Details" class="button3" />
							<div class="htmlstring3"> 
								   
							</div>
							<div id="pop4" class="pop-up">
								<div class="popBox">
									<div class="popScroll">
										<form action="http://titan.csit.rmit.edu.au/~e54061/wp/form-tester-2.php" method="post" target="_blank">
											<table class="buy1">
												<tr>
													<th>
														Movie: The Wedding Ringer <input type="hidden" name="film" value="RC">
													</th>
													<th>
														Day:
														 <select name="day">	 
														  <option value="">Select a day</option>
														  <option value="Monday">Monday</option>
														  <option value="Tuesday">Tuesday</option>		 
														  <option value="Saturday">Saturday</option>
														  <option value="Sunday">Sunday</option>
														</select>
													</th>
													<th>
														Session: 
														<select name="time">	 
														  <option value="">Select a session</option>
														  <option value="9pm">Monday-9pm</option>
														  <option value="9pm">Tuesday-9pm</option>		 
														  <option value="6pm">Saturday-6pm</option>
														  <option value="6pm">Sunday-6pm</option>
														</select>
														
													</th>
													
												</tr>
											</table>
											<table class="buy2">
												<thead>
													<tr>
														<td>Ticket Type</td>
														<td>Ticket Cost</td>
														<td>Quantity</td>
														<td> Subtotal Price</td>	
													</tr>
												</thead>
												<tbody>
													<tr>
											            <td>Adult</td>
											            <td>
											                <input type="hidden"  class="cost" value="18" >$<span>18.00</span>
											
											            </td>
											            <td>
											                <input type="number"  class="quantity" value="0" min="0" max="30" name="SA">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr>
											        <tr>
											            <td>Concession</td>
											            <td>
											                <input type="hidden" class="cost" value="15">$<span>15.00</span>
											
											            </td>
											            <td>
											                <input type="number" class="quantity" value="0" min="0" max="30" name="SP">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr>
											        <tr>
											            <td>Child</td>
											            <td>
											                <input type="hidden" class="cost" value="12">$<span>12.00</span>
											
											            </td>
											            <td>
											                <input type="number"  class="quantity" value="0" min="0" max="30" name="SC">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr>
											        <tr>
											            <td>First Class Adult</td>
											            <td>
											                <input type="hidden" class="cost" value="30">$<span>30.00</span>
											
											            </td>
											            <td>
											                <input type="number" class="quantity" value="0" min="0" max="30" name="FA">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr> 
											        <tr>
											            <td>First Class Child</td>
											            <td>
											                <input type="hidden" class="cost" value="25">$<span>25.00</span>
											
											            </td>
											            <td>
											                <input type="number"  class="quantity" value="0" min="0" max="30" name="FC">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr>
											        <tr>
											            <td>Beanbag - 1 Person</td>
											            <td>
											                <input type="hidden" class="cost" value="30">$<span>30.00</span>
											
											            </td>
											            <td>
											                <input type="number" class="quantity" value="0" min="0" max="30" name="B1">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr>
											        <tr>
											            <td>Beanbag - 2 People</td>
											            <td>
											                <input type="hidden" class="cost" value="30">$<span>30.00</span>
											
											            </td>
											            <td>
											                <input type="number" class="quantity" value="0" min="0" max="30" name="B2">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr>
											        <tr>
											            <td>Beanbag - 3 Children</td>
											            <td>
											                <input type="hidden" class="cost" value="30">$<span>30.00</span>
											
											            </td>
											            <td>
											                <input type="number" class="quantity" value="0" min="0" max="30" name="B3">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr>
											        <tr>
														<td>
														</td>
														<td></td>
														<td>Total Price:</td>
															
														<td>
															<input type="hidden" id="newTotalPriceRC" name="price">
															<span id="showTotalPriceRC"></span>
														</td>
													</tr>											
											    </tbody>
											</table>
											

											<input type="submit" value="Buy Tickets" />
										</form>
										
									</div>
									<a href="" class="close"><span></span></a>
  								</div>
  								<a href="#links" class="lightbox">Back to links</a>
							</div>

						</li>
						<li>
                            <!--image below sourced from http://cdn.pastemagazine.com/www/articles/les%20mis%20main.jpeg?1354535987-->
							<img src="../images/lesmis.jpeg" alt="Les Miserables"/>
							<h3>Les Misérables</h3>
							
							<p>In 19th-century France, Jean Valjean, who for decades has been hunted by the ruthless policeman Javert after breaking parole, agrees to care for a factory worker's daughter. The decision changes their lives for ever.</p>
							<ul class="links">
								<li><a href="#pop5">Buy Tickets</a></li>
							</ul>
							<input type="button" value="More Details" class="button4" />
							<div class="htmlstring4"> 
								   
							</div>
							<div id="pop5" class="pop-up">
								<div class="popBox">
									<div class="popScroll">
										<form action="http://titan.csit.rmit.edu.au/~e54061/wp/form-tester-2.php" method="post" target="_blank">
											<table class="buy1">
												<tr>
													<th>
														Movie: Les Misérables<input type="hidden" name="film" value="AF">
													</th>
													<th>
														Day:
														 <select name="day">	 
														  <option value="">Select a day</option>
														  <option value="Monday">Monday</option>
														  <option value="Tuesday">Tuesday</option>		 
														  <option value="Saturday">Saturday</option>
														  <option value="Sunday">Sunday</option>
														</select>
													</th>
													<th>
														Session: 6pm <input type="hidden" name="time" value="6pm">
													</th>
												</tr>
											</table>
											<table class="buy2">
												<thead>
													<tr>
														<td>Ticket Type</td>
														<td>Ticket Cost</td>
														<td>Quantity</td>
														<td> Subtotal Price</td>	
													</tr>
												</thead>
												<tbody>
													<tr>
											            <td>Adult</td>
											            <td>
											                <input type="hidden"  class="cost" value="18" >$<span>18.00</span>
											
											            </td>
											            <td>
											                <input type="number"  class="quantity" value="0" min="0" max="30" name="SA">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr>
											        <tr>
											            <td>Concession</td>
											            <td>
											                <input type="hidden" class="cost" value="15">$<span>15.00</span>
											
											            </td>
											            <td>
											                <input type="number" class="quantity" value="0" min="0" max="30" name="SP">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr>
											        <tr>
											            <td>Child</td>
											            <td>
											                <input type="hidden" class="cost" value="12">$<span>12.00</span>
											
											            </td>
											            <td>
											                <input type="number"  class="quantity" value="0" min="0" max="30" name="SC">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr>
											        <tr>
											            <td>First Class Adult</td>
											            <td>
											                <input type="hidden" class="cost" value="30">$<span>30.00</span>
											
											            </td>
											            <td>
											                <input type="number" class="quantity" value="0" min="0" max="30" name="FA">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr> 
											        <tr>
											            <td>First Class Child</td>
											            <td>
											                <input type="hidden" class="cost" value="25">$<span>25.00</span>
											
											            </td>
											            <td>
											                <input type="number"  class="quantity" value="0" min="0" max="30" name="FC">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr>
											        <tr>
											            <td>Beanbag - 1 Person</td>
											            <td>
											                <input type="hidden" class="cost" value="30">$<span>30.00</span>
											
											            </td>
											            <td>
											                <input type="number" class="quantity" value="0" min="0" max="30" name="B1">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr>
											        <tr>
											            <td>Beanbag - 2 People</td>
											            <td>
											                <input type="hidden" class="cost" value="30">$<span>30.00</span>
											
											            </td>
											            <td>
											                <input type="number" class="quantity" value="0" min="0" max="30" name="B2">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr>
											        <tr>
											            <td>Beanbag - 3 Children</td>
											            <td>
											                <input type="hidden" class="cost" value="30">$<span>30.00</span>
											
											            </td>
											            <td>
											                <input type="number" class="quantity" value="0" min="0" max="30" name="B3">
											            </td>
											            <td>
											                <input type="hidden" class="subtotal">$<span class="subtotal">0.00</span>
											
											            </td>
											        </tr>
											        <tr>
														<td>
														</td>
														<td></td>
														<td>Total Price:</td>
															
														<td>
															<input type="hidden" id="newTotalPriceAF" name="price">
															<span id="showTotalPriceAF"></span>
														</td>
													</tr>											
											    </tbody>
											</table>
											
											<input type="submit" value="Buy Tickets" />
										</form>
										
									</div>
									<a href="" class="close"><span></span></a>
  								</div>
  								<a href="#links" class="lightbox">Back to links</a>
							</div>

						</li>
					</ul>
			</div>
