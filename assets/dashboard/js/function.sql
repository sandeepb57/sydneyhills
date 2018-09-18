DELIMITER $$

CREATE FUNCTION TypeOfRides(rideType INT, eachMonth INT) RETURNS INT
    DETERMINISTIC
BEGIN
    DECLARE eachMonthCount INT;

    SELECT COUNT(*) as eachMonthCount FROM sh_bookingdetails WHERE sh_bookingdetails.typeOfRide = rideType AND YEAR(rideDate) = YEAR(CURRENT_DATE()) AND MONTH(rideDate) = eachMonth;

 RETURN (eachMonthCount);
END
