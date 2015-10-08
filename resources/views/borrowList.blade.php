<table data-role="table" id="borrow-table" data-filter="true" data-input="#filterTable-input" class="ui-responsive ui-shadow table-stripe">
						<thead>
							<tr>
								<th data-priority="persist">Book Title</th>
								<th data-priority="1">Book Author</th>
								<th data-priority="persist">Borrowed By</th>
								<th data-priority="2">Borrowed Date</th>
								<th data-priority="3"></th>
							</tr>
						</thead>
						<tbody>
							{!!$borrowList!!}
							<tr>
								<td>Patterns of Enterprise Application Architecture</td>
								<td>Martin Fowler</td>
								<td>John Smith</td>
								<td>15/06/2015</td>
								<td>Return Book</td>
							</tr>
							<tr>
								<td>Code Complete(2nd edition)</td>
								<td>Steve McConnell</td>
								<td>David Johnson</td>
								<td>30/06/2015</td>
								<td>Return Book</td>
							</tr>
							<tr>
								<td>Test-Driven Development:By Example</td>
								<td>Kent Beck</td>
								<td>Sachin Patel</td>
								<td>5/07/2015</td>
								<td>Return Book</td>
							</tr>
							<tr>
								<td>Domain Driven Designs</td>
								<td>Eric Evans</td>
								<td>Li Sun</td>
								<td>23/07/2015</td>
								<td>Return Book</td>
							</tr>
							<tr>
								<td>The Design of Everyday Things</td>
								<td>Donald Norman</td>
								<td>James Tyler</td>
								<td>13/08/2015</td>
								<td>Return Book</td>
							</tr>
							<tr>
								<td>Design Patterns in C#</td>
								<td>Steve Metsker</td>
								<td>Michael Jones</td>
								<td>27/08/2015</td>
								<td>Return Book</td>
							</tr>
							<tr>
								<td>Clean Code</td>
								<td>Robert C. Martin</td>
								<td>Chan Lee</td>
								<td>01/09/2015</td>
								<td>Return Book</td>
							</tr>
						</tbody>
</table>