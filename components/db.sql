CREATE TABLE `Destination` (
    `did` int(40) NOT NULL,
    `name` varchar(20) NOT NULL,
    `description` varchar(1000) NOT NULL,
    `region` varchar(20) NOT NULL
);

CREATE TABLE `Itineraries` (
    `iid` int(40) NOT NULL,
    `destination_id` varchar(20) NOT NULL,
    `name` varchar(20) NOT NULL,
    `start_date` varchar(20) NOT NULL,
    `end_date` varchar(20) NOT NULL,
    `price` varchar(20) NOT NULL
    `max_travellers` varchar(20) NOT NULL,
    `description` varchar(1000) NOT NULL,
);

CREATE TABLE `Users` (
    `uid` int(40) NOT NULL,
    `username` varchar(20) NOT NULL,
    `itinerary_id` varchar(20) NOT NULL,
    `booking_date` varchar(20) NOT NULL,
    `status` varchar(20) NOT NULL
);

CREATE TABLE `Filters` (
    `fid` int(40) NOT NULL,
    `filter_type` varchar(20) NOT NULL,
    `filter_value` varchar(20) NOT NULL,
);


ALTER TABLE `Destination`
  ADD PRIMARY KEY (`did`);

ALTER TABLE `Itineraries`
  ADD PRIMARY KEY (`iid`);

ALTER TABLE `Users`
  ADD PRIMARY KEY (`uid`);

ALTER TABLE `Filters`
  ADD PRIMARY KEY (`fid`);