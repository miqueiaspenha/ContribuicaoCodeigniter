USE CI_Database
GO

/*
 20120309
 CodeIgniter Session Database
 Author Cusco
*/

CREATE TABLE CI_Sessions (
 session_id NVARCHAR(40) DEFAULT '0' NOT NULL,
 ip_address NVARCHAR(16) DEFAULT '0' NOT NULL,
 user_agent NVARCHAR(120) NOT NULL,
 last_activity INT DEFAULT 0 NOT NULL,
 user_data NTEXT NOT NULL,
 CONSTRAINT  PK_CI_Session PRIMARY KEY (session_id ASC)
)
GO

CREATE NONCLUSTERED INDEX NCI_Session_Activity
ON CI_Sessions(last_activity DESC)
GO 