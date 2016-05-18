-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2016 at 03:38 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `election_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE IF NOT EXISTS `category_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`id`, `name`) VALUES
(1, 'Heath'),
(2, 'Taxes'),
(3, 'Jobs/Economy'),
(4, 'Democracy'),
(5, 'Education'),
(6, 'Seniors'),
(7, 'Environment'),
(8, 'Crime'),
(9, 'Govt Spending'),
(10, 'Immigration'),
(11, 'Consumers'),
(12, 'Foreign Policy'),
(13, 'Arts and Culture'),
(14, 'Families');

-- --------------------------------------------------------

--
-- Table structure for table `fact_table`
--

CREATE TABLE IF NOT EXISTS `fact_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `party_id` int(11) NOT NULL,
  `fact` varchar(300) NOT NULL,
  `fact_image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `party_id` (`party_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mp_table`
--

CREATE TABLE IF NOT EXISTS `mp_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `party_id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `party_table`
--

CREATE TABLE IF NOT EXISTS `party_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `party_table`
--

INSERT INTO `party_table` (`id`, `name`) VALUES
(1, 'Liberal Party of Canada'),
(2, 'Conservative Party of Canada'),
(3, 'New Democratic Party'),
(4, 'Bloc Quebecois'),
(5, 'Green Party of Canada'),
(6, 'Libertarian Party of Canada');

-- --------------------------------------------------------

--
-- Table structure for table `province_table`
--

CREATE TABLE IF NOT EXISTS `province_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `abbreviation` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `province_table`
--

INSERT INTO `province_table` (`id`, `name`, `abbreviation`) VALUES
(1, 'Ontario', 'ON'),
(2, 'Quebec', 'QC'),
(3, 'Nova Scotia', 'NS'),
(4, 'New Brunswick', 'NB'),
(5, 'Manitoba', 'MB'),
(6, 'British Columbia', 'BC'),
(7, 'Prince Edward Island', 'PE'),
(8, 'Saskatchewan', 'SK'),
(9, 'Alberta', 'AB'),
(10, 'New Foundland and Labrador', 'NL'),
(11, 'Northwest Territories', 'NT'),
(12, 'Yukon', 'YT'),
(13, 'Nunavut', 'NU');

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `parties_info_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `party_name` varchar(100) NOT NULL,
  `leader` varchar(100) NOT NULL,
  `leader_content` text NOT NULL,
  `leader_img` varchar(100) NOT NULL,
  `history_content` text NOT NULL,
  `history_img` varchar(100) NOT NULL,
  `position_content` text NOT NULL,
  `position_image` varchar(100) NOT NULL,
  `party` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `parties_info_table`
--

INSERT INTO `parties_info_table` (`id`, `party_name`, `leader`, `leader_content`, `leader_img`, `history_content`, `history_img`, `position_content`, `position_image`, `party`) VALUES
(1, 'liberal party of canada', 'Justin Trudeau', 'On April 14, 2013 Justin Trudeau, son of former Prime Minister Pierre Trudeau, was elected leader of the\r\nLiberal Party on the first ballot, winning 80% of the vote.Following his win, support for the Liberal Party\r\nincreased considerably, and the party moved into first place in public opinion polls. Justin Pierre James\r\nTrudeau PC MP is a Canadian politician who is the 23rd Prime Minister of Canada.', 'justin-trudeau.jpg', 'The Liberals are descended from the mid-19th century Reformers who agitated for responsible government\r\nthroughout British North America.These includedGeorge Brown, Robert Baldwin, William Lyon Mackenzie\r\nand the Clear Grits in Upper Canada, Joseph Howe in Nova Scotia, and the Patriotes and Rouges in Lower\r\nCanada led by figures such as Louis-Joseph Papineau. The Clear Grits and Parti roughe sometimes\r\nfunctioned as a united bloc in the legislature of the Province of Canada beginning in 1854, and a united\r\nLiberal Party combining both English and French Canadian members was formed in 1861.', 'liberal-history.jpg', 'The party espouses the principles of liberalism and generally sits at the center of the Canadian political\r\nspectrum.The Liberal Party is positioned to the left of the Conservative Party of Canada and to the right of\r\nthe New Democratic Party(NDP).', 'liberal-logo.jpg', 'liberal'),
(2, 'New Democratic Party', 'Tom Mucliar', 'In 2007, after serving as a cabinet minister in Quebec, Tom Mulcair accepted Jack Layton''s invitation to join his\nNew Democrat team and work to build a better Canada. After Jack''s passing, Tom was elected leader of\nCanada''s NDP to continue our work to build the Canada of our dreams.\nIn Parliament - and in communities across Canada - Tom has led the fight for better health care, real action on\nclimate change, and to make life more affordable for Canadians.\nTom is the second oldest of ten brothers and sisters. From an early age, he learned the importance of looking out\nfor others, sticking together, and backing up principles with action. Those middle-class values continue to guide\nTom - as a father, grandfather, and leader of the NDP.', 'tom-muclair.jpeg', 'As the Second World War drew to a close Mackenzie King''s Liberal government had determined that the Cooperative\r\nCommonwealth Federation platform of social programs such as old age security, unemployment\r\ninsurance and, under Tommy Douglas, Medicare, were all popular and attractive public policy options.\r\nThe 1958 election was a turning point which saw the CCF win only 8 seats. Support in Quebec and many other\r\nparts of the country refused to grow as a traditional bias against the CCF remained entrenched in the electorate.\r\nThe Canadian Labour Congress was approached about forming a new national party which would bring in the\r\nsupport of labour and the remaining pieces of the CCF.\r\nIn 1961 the New Democratic Party or NDP was founded and Tommy Douglas, the dynamic premier of\r\nSaskatchewan was chosen as it''s first leader. Douglas who pioneered Medicare in Saskatchewan was an eloquent\r\nand effect speaker and managed to bring the CCF back from near extinction. By the 1962 election the NDP more\r\nthen doubled their 1958 seats and by 1972 had grown to 31 seats and a share of the power during the Liberal\r\nminority government.', 'democratic-history.jpg', 'The New Democratic Party is a major social democratic federal political party in Canada.The conservative Party of\r\nCanada is positioned center-left of the Canadian political spectrum .', 'democratic-logo.jpg', 'democratic'),
(3, 'Conservative Party of Canada', 'Rona Ambrose', '\nRona Ambrose is the interim leader of the Conservative Party of Canada. Ms. Ambrose is the Conservative MP for the\nnew riding of Sturgeon River-Parkland. She was first elected as a Member of Parliament for Edmonton Spruce Grove\nin 2004.\nDuring our Conservative Party''s time in government, Ms. Ambrose held several cabinet positions including\nEnvironment, Intergovernmental Affairs, Western Economic Diversification, Labour, Public Works and Government\nServices Canada, Receiver General, Status of Women, and Health. Ms. Ambrose holds a Bachelor of Arts from the\nUniversity of Victoria and a Master''s Degree in Political Science from the University of Alberta.', 'rona-ambrose.jpg', 'On October 16th, 2003, the leaders of the Canadian Reform Conservative Alliance and the Progressive Conservative\nParty of Canada announced an agreement-in-principle to unite under a new political banner. In December 2003, the\nmerger was overwhelmingly ratified by members of both parties and the Conservative Party of Canada was officially\nborn. This unification of Canada''s conservative parties restored and rejuvenated the national political movement that\nhas been building a stronger, safer, and better Canada for almost 150 years.Today''s Conservative Party is a vibrant national organization with strong grassroots support from coast to coast to\ncoast. The Party, its caucus, and its members upholding the proud Canadian Conservative tradition.', 'conservative-history.jpg', 'The conservative Party of Canada is a progressive conservative government and is positioned on the right of the\r\nCanadian political spectrum . The Conservative Party is the successor to multiple right-wing parties which\r\nhave existed in Canada for over a century.', 'conservative-logo.jpg', 'conservative'),
(4, 'Green Party of Canada', 'Elizabeth May', 'Elizabeth Evans May (born June 9, 1954) is an American-Canadian politician. May is leader of the Green\nParty of Canada and Member of Parliament for Saanich - Gulf Islands. On May 2, 2011, she became the\nfirst member of the Green Party of Canada to be elected as a Member of Parliment.I n the Federal election\non October 19, 2015 Elizabeth May was re-elected in the riding of Saanich-Gulf Islands, being the only\nGreen Party member to win a seat.', 'elizabeth-may.jpg', 'The Green Party of Canada was founded at a conference held at Carleton University in Ottawa in 1983.\r\nUnder its first leader, Dr. Trevor Hancock, the party ran 60 candidates in the 1984 federal election. The\r\nGreen Party of Canada is independent of other green parties around the world but remains philosophically\r\naligned with them.\r\nSince its inception, the party has been developing as an organization, expanding its membership and\r\nimproving its showing at the polls. In the 2000 federal election, the party fielded 111 candidates, up from 78\r\nin 1997.\r\nOn June 28, 2004, the Green Party of Canada made history when it became only the fourth federal political\r\nparty ever to run candidates in all 308 ridings.\r\nOn March 17, 2007, May announced that she would run in the Nova Scotia riding of Central Nova, in the\r\n2008 federal election. May was initially excluded from the televised leadership debate. After intense public\r\npressure, she was included and her performance was a breakthrough for the Green Party. Despite losing to\r\nPeter MacKay in Central Nova, May won 32% of the vote, the highest percentage ever for a Green Party\r\ncandidate in Canada.', 'green-history.jpg', 'The Greens advance a broad multi-issue political platform that reflects its core values of ecological wisdom, social\r\njustice, grassroots democracy and non-violence. Bloc Quebecois sits at the center position of the Canadian Politcal\r\nspectrum.', 'green-logo.jpg', 'green'),
(5, 'Bloc Quebecois', 'Rheal Fortin', 'Rheal Fortin is a Canadian lawyer, politician and interim leader of the Bloc Quebecois. A lawyer by\nprofession, he is the president of Bissonnette Fortin Giroux, a law firm in Saint-Jerome. He studied law at\nUniversity of Sherbrooke. He was elected to the Canadian House of Commons in the 2015 election in\nRiviere-du-nord as a member of the Bloc-Quebecois.', 'rheal-fortin.jpg', 'Founded in 1990 by Lucien Bouchard in the wake of the failure of the Meech Lake constitutional accord,\nthe Bloc Quebecois has seen its shares of ups and downs.In the 1993 election, the Bloc won 54 out of 75 seats\nin Quebec and formed the official opposition in the House of Commons. In the 1995 referendum, the Bloc joined the\nYes side. Sagging in the polls, the Yes side got a boost after Parti Quebecois leader Jacques Parizeau named Bouchard\nthe chief negotiator in the event of a Yes vote. In 1997, after Bouchard''s resignation from the House of Commons to\ntake over the leadership of the PQ, Gilles Duceppe becomes Bloc leader. Bloc support slides for the next two\nelections. In the 2004 election, the Bloc soars back up in the wake of anger over the Liberal sponsorship scandal. In\nthe 2011 election, the Bloc is almost wiped off the electoral map in favour of the New Democratic Party. It loses 44 of\nthe 47 seats it had.', 'quebecois-history.jpg', 'The Bloc Quebecois is a federal political party in Canada devoted to the protection of Quebec''s interests in the House\nof Commons of Canada, and the promotion of Quebec sovereignty. Bloc Quebecois sits at the center-left position of\nthe Canadian Politcal spectrum.', 'quebecois-logo.jpg', 'quebecois'),
(6, 'Libertarian Party of Canada', 'Tim Moen', 'Tim Moen is a firefighter, paramedic, business owner, filmmaker, volunteer and politician from Canada. Tim has spent his career protecting life and property from mindless destructive forces. Now as leader of the Libertarian Party of Canada he is focusing his attention on the destructive force of government which has an unquenchable appetite for money and power at the expense of its citizens.', 'tim-moen.jpeg', 'The party was founded on July 7, 1973 by Bruce Evoy who became its first chairman, and seven others. Evoy ran for election to Parliament in the 1974 federal election  in the Toronto riding  of Rosedale. The party achieved registered status in the 1979 federal election  by running more than fifty candidates.\r\n\r\nThe party described itself as Canada''s "fourth party" in the 1980s, but it has since been displaced by new parties such as the Bloc Quebecois and the Green Party of Canada. The party declined to join the Reform Party of Canada when it was formed in 1987. Many libertarians were also attracted to provincial Progressive Conservative parties that moved to the right during the 1990s in Ontario  under Mike Harris, and in Alberta under Ralph Klein.\r\n\r\nThe decline in the party''s membership and resources resulted in Elections Canada removing their status as a registered party immediately before the 1997 federal election when the party failed to run the minimum fifty candidates needed to maintain its registration.\r\n\r\nIn the 2015 federal election, the party fielded 72 candidates and solidified their position as the 6th federal party in Canada. With growth over 500% from the 2011 elections, the party is the fastest growing party.', 'libertarian-history.jpg', 'The party subscribes to classical liberal (social and economic freedom) tenets of the libertarian movement across Canada. Some policies the party advocates for are; ending Prohibition of drugs, lowering taxes, protecting gun rights and non-interventionism.', 'libertarian-logo.png', 'libertarian');

--
-- Table structure for table `user_table`
--

CREATE TABLE IF NOT EXISTS `user_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vote_table`
--

CREATE TABLE IF NOT EXISTS `vote_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `party_id` int(11) NOT NULL,
  `agree` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
