# MySQLr #

## Class Reference ##

### Database ###

#### Public Properties ####

##### error #####

#### Methods ####

##### execute #####

_Executes any SQL Statement, returning the number of affected rows_

###### parameter: string (mysql statement) ######

###### return: pdo result ######

##### insert #####

_Executes any SQL Statement, but if it is an insert statement, returns the last insert id_

###### parameter: string (mysql statement) ######

###### return: integer ######

##### fetch #####

_Executes any SQL Statement, but if it is a fetch query, returns an array of rows_

###### parameter: string (mysql statement) ######

###### return: array of assocs ######


### Available Functions ###

#### quoted_string_or_null ####

_returns a quoted string or the word NULL to pass to an SQL insert statement_

###### parameter: string ######

###### return: string ######

#### asserted_string ####

_returns a quoted string or an empty quoted string to pass to an SQL insert statement_

###### parameter: string ######

###### return: string ######

#### integer_or_null ####

_returns an integer or the word NULL (if the parameter is not a number) to pass to an SQL insert statement_

###### parameter: any object ######

###### return: integer ######

#### asserted_integer ####

_returns an integer (0 if the parameter is not a number) to pass to an SQL insert statement_

###### parameter: string ######

###### return: integer ######
