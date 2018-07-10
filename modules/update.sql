CREATE
VIEW `get_total_student`AS
SELECT
Count(student_profile.studentID)as total,
student_profile.yearID,
student_profile.progID
FROM
student_profile
WHERE
student_profile.statusID
GROUP BY
student_profile.yearID,
student_profile.progID,
student_profile.statusID ;