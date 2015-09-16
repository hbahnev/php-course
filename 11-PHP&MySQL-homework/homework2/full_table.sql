SELECT
	children.ChildID,
	children.Name,
	children.Age,
  kindergarder.Name
FROM
	kindergarder
JOIN
	children  ON kindergarder.KinderGarderID = children.KinderGarderID