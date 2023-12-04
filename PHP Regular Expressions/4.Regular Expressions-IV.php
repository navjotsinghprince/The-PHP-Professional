<?php
/*
//These are postive lookahead examples

bill paid
bill not paid
bill paid
bill not paid

bill(?=\spaid) ==select all bills that are paid
-----------------------------
100 USD
250 JPY
900 EUR
856 INR
5653 USD

\d+(?=\sUSD) ==select usd doller 100 and 5653

====================================================
These are Negative postive lookahead examples

bill paid
bill not paid
bill paid
bill not paid

bill(?!\spaid) ==elect all bills that are not paid

100 USD
250 JPY
900 EUR
856 INR

3}(?!\sUSD)==It will ignore usd and select the other currency.

\d{3}(?!\s[JPY|INR])==Ignore Japanese and Indian currency and select the other currency

==============================================
This is postive look behind

free course
paid course
free course 
paid course
(?<=free\s)course  ===only select free course

social worker
hard worker
lazy worker
poor worker
intelligent worker

(?<=social\s)worker===It will social worker

=============================================
This is Negative look behind

social worker
hard worker
lazy worker
poor worker
intelligent worker

(?<!social\s)worker==It will ignore the 'social worker' and select all other workers.


*/
