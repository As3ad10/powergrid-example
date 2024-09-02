In this example, after seeding the database, and creating a powergrid table. the value of the decimal attributes is not showing properly in the table. instead of 10000, it shows 10. I used Number::format() in the model as a getter for the amount attribute. 

if you try to `dd(Invoice::first()->amount)`, the value will show correctly.

this issue only happens when creating the table with the eloquent builder.
