import time

def timeStrToInt(timestr):
	return int(time.mktime(time.strptime(timestr, "%Y-%m-%d %H:%M:%S")))

def subTime(time1,time2):
	return timeStrToInt(time1)-timeStrToInt(time2)

s = subTime("2016-03-29 15:32:45", "2016-03-01 00:00:01")
print s

