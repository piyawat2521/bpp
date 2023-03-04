<?php
ob_start();
session_start();
include("session/adminSession.php");
error_reporting(E_ALL ^ E_NOTICE);
?>
<?php
header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename="ตำรวจพลร่ม.xls"'); #ชื่อไฟล์
?>

<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel"
    xmlns="http://www.w3.org/TR/REC-html40">

<HTML>

<HEAD>

    <meta charset="UTF-8">

</HEAD>

<BODY>

    <TABLE x:str BORDER="1">

        <TR>

            <td>ลำดับที่</td>
            <td>สังกัด</td>
            <td>สังกัดย่อย</td>

            <td>sex</td>
            <td>age</td>
            <td>q3</td>
            <td>q4</td>
            <td>q5.1</td>
            <td>q5.2</td>
            <td>q5.3</td>
            <td>q5.4</td>
            <td>q5.5</td>
            <td>q5.6</td>
            <td>q5.7</td>
            <td>q5.8</td>
            <td>q5.9</td>
            <td>q5.10</td>
            <td>q2.5t</td>
            <td>q2.6</td>
            <td>q2.6t</td>
            <td>q2.7</td>
            <td>q2.8</td>
            <td>q2.9</td>
            <td>q2.10</td>
            <td>q2.10t</td>
            <td>q2.11</td>
            <td>q2.11t</td>
            <td>q2.12</td>
            <td>q2.12t</td>
            <td>q2.13</td>
            <td>q2.14</td>
            <td>q2.15</td>
            <td>q2.16</td>


            <td>1.1</td>
            <td>1.2</td>
            <td>1.3</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <td>11</td>
            <td>cv1</td>

            <td>12</td>
            <td>13</td>
            <td>14</td>
            <td>15</td>
            <td>16</td>
            <td>cv2</td>

            <td>17</td>
            <td>18</td>
            <td>19</td>
            <td>20</td>
            <td>21</td>
            <td>cv3</td>

            <td>22</td>
            <td>23</td>
            <td>24</td>
            <td>25</td>
            <td>26</td>
            <td>cv4</td>

            <td>27</td>
            <td>28</td>
            <td>29</td>
            <td>cv5</td>

            <td>30</td>
            <td>31</td>
            <td>32</td>
            <td>33</td>
            <td>34</td>
            <td>35</td>
            <td>cv6</td>

            <td>36</td>
            <td>37</td>
            <td>38</td>
            <td>cv7</td>

            <td>39</td>
            <td>40</td>
            <td>41</td>
            <td>42</td>
            <td>cv8</td>

            <td>43</td>
            <td>44</td>
            <td>45</td>
            <td>46</td>
            <td>47</td>
            <td>48</td>
            <td>49</td>
            <td>50</td>
            <td>51</td>
            <td>52</td>
            <td>53</td>
            <td>54</td>
            <td>55</td>
            <td>56</td>
            <td>57</td>
            <td>58</td>
            <td>59</td>
            <td>cv9</td>

            <td>60</td>
            <td>61</td>
            <td>62</td>
            <td>63</td>
            <td>64</td>
            <td>65</td>
            <td>66</td>
            <td>67</td>
            <td>68</td>

            <td>69</td>
            <td>70</td>
            <td>71</td>
            <td>72</td>
            <td>73</td>

            <td>74</td>
            <td>75</td>
            <td>76</td>
            <td>77</td>
            <td>78</td>
            <td>79</td>
            <td>80</td>
            <td>81</td>
            <td>82</td>
            <td>83</td>
            <td>84</td>
            <td>85</td>

            <td>date</td>
            <td>time</td>
            <td>key</td>

        </TR>

        <?php
		include("config/connect.php");

		$se = mysqli_query($con, " select* from in_data ");

		$n = 1;

		while ($num = mysqli_fetch_assoc($se)) {

			$id = $num["in_id"];

			echo '
	<TR>

	<td>' . $id . '</td>
	<td>' . $num["agency"] . '</td>
	<td>' . $num["agency_sub"] . '</td>

	<td>' . $num["sex"] . '</td>
	<td>' . $num["age"] . '</td>
	<td>' . $num["2_3"] . '</td>
	<td>' . $num["2_4"] . '</td>
	<td>' . $num["2_5_1"] . '</td>
	<td>' . $num["2_5_2"] . '</td>
	<td>' . $num["2_5_3"] . '</td>
	<td>' . $num["2_5_4"] . '</td>
	<td>' . $num["2_5_5"] . '</td>
	<td>' . $num["2_5_6"] . '</td>
	<td>' . $num["2_5_7"] . '</td>
	<td>' . $num["2_5_8"] . '</td>
	<td>' . $num["2_5_9"] . '</td>
	<td>' . $num["2_5_10"] . '</td>
	<td>' . $num["2_5t"] . '</td>
	<td>' . $num["2_6"] . '</td>
	<td>' . $num["2_6t"] . '</td>
	<td>' . $num["2_7"] . '</td>
	<td>' . $num["2_8"] . '</td>
	<td>' . $num["2_9"] . '</td>
	<td>' . $num["2_10"] . '</td>
	<td>' . $num["2_10t"] . '</td>
	<td>' . $num["2_11"] . '</td>
	<td>' . $num["2_11t"] . '</td>
	<td>' . $num["2_12"] . '</td>
	<td>' . $num["2_12t"] . '</td>
	<td>' . $num["2_13"] . '</td>
	<td>' . $num["2_14"] . '</td>
	<td>' . $num["2_15"] . '</td>
	<td>' . $num["2_16"] . '</td>

	<td>' . $num["in1_1"] . '</td>
	<td>' . $num["in1_2"] . '</td>
	<td>' . $num["in1_3"] . '</td>
	<td>' . $num["in2"] . '</td>
	<td>' . $num["hn3"] . '</td>
	<td>' . $num["hn4"] . '</td>
	<td>' . $num["hn5"] . '</td>
	<td>' . $num["hn6"] . '</td>
	<td>' . $num["hn7"] . '</td>
	<td>' . $num["in3"] . '</td>
	<td>' . $num["in4"] . '</td>
	<td>' . $num["in5"] . '</td>
	<td>' . $num["in6"] . '</td>
	<td>' . $num["cv1"] . '</td>

	<td>' . $num["in7"] . '</td>
	<td>' . $num["in8"] . '</td>
	<td>' . $num["in9"] . '</td>
	<td>' . $num["in10"] . '</td>
	<td>' . $num["in11"] . '</td>
	<td>' . $num["cv2"] . '</td>

	<td>' . $num["in12"] . '</td>
	<td>' . $num["in13"] . '</td>
	<td>' . $num["in14"] . '</td>
	<td>' . $num["in15"] . '</td>
	<td>' . $num["in16"] . '</td>
	<td>' . $num["cv3"] . '</td>

	<td>' . $num["in17"] . '</td>
	<td>' . $num["in18"] . '</td>
	<td>' . $num["in19"] . '</td>
	<td>' . $num["in20"] . '</td>
	<td>' . $num["in21"] . '</td>
	<td>' . $num["cv4"] . '</td>

	<td>' . $num["in22"] . '</td>
	<td>' . $num["in23"] . '</td>
	<td>' . $num["in24"] . '</td>
	<td>' . $num["cv5"] . '</td>

	<td>' . $num["in25"] . '</td>
	<td>' . $num["in26"] . '</td>
	<td>' . $num["in27"] . '</td>
	<td>' . $num["in28"] . '</td>
	<td>' . $num["in29"] . '</td>
	<td>' . $num["in30"] . '</td>
	<td>' . $num["cv6"] . '</td>

	<td>' . $num["in31"] . '</td>
	<td>' . $num["in32"] . '</td>
	<td>' . $num["in33"] . '</td>
	<td>' . $num["cv7"] . '</td>

	<td>' . $num["in34"] . '</td>
	<td>' . $num["in35"] . '</td>
	<td>' . $num["in36"] . '</td>
	<td>' . $num["in37"] . '</td>
	<td>' . $num["cv8"] . '</td>

	<td>' . $num["in38"] . '</td>
	<td>' . $num["in39"] . '</td>
	<td>' . $num["in40"] . '</td>
	<td>' . $num["in41"] . '</td>
	<td>' . $num["in42"] . '</td>
	<td>' . $num["in43"] . '</td>
	<td>' . $num["in44"] . '</td>
	<td>' . $num["in45"] . '</td>
	<td>' . $num["in46"] . '</td>
	<td>' . $num["in47"] . '</td>
	<td>' . $num["in48"] . '</td>
	<td>' . $num["in49"] . '</td>
	<td>' . $num["in50"] . '</td>
	<td>' . $num["in51"] . '</td>
	<td>' . $num["in52"] . '</td>
	<td>' . $num["in53"] . '</td>
	<td>' . $num["in54"] . '</td>
	<td>' . $num["cv9"] . '</td>

	<td>' . $num["in55"] . '</td>
	<td>' . $num["in56"] . '</td>
	<td>' . $num["in57"] . '</td>
	<td>' . $num["in58"] . '</td>
	<td>' . $num["in59"] . '</td>
	<td>' . $num["in60"] . '</td>
	<td>' . $num["in61"] . '</td>
	<td>' . $num["in62"] . '</td>
	<td>' . $num["in63"] . '</td>

	<td>' . $num["in64"] . '</td>
	<td>' . $num["in65"] . '</td>
	<td>' . $num["in66"] . '</td>
	<td>' . $num["in67"] . '</td>
	<td>' . $num["in68"] . '</td>
	<td>' . $num["in69"] . '</td>
	
	<td>' . $num["in70"] . '</td>
	<td>' . $num["in71"] . '</td>
	<td>' . $num["in72"] . '</td>
	<td>' . $num["in73"] . '</td>
	<td>' . $num["in74"] . '</td>
	<td>' . $num["in75"] . '</td>
	<td>' . $num["in76"] . '</td>
	<td>' . $num["in77"] . '</td>
	<td>' . $num["in78"] . '</td>
	<td>' . $num["in79"] . '</td>
	<td>' . $num["in80"] . '</td>
	



	<td>' . $num["in_date"] . '</td>
	<td>' . $num["in_time"] . '</td>
	<td>' . $num["id_code"] . '</td>

	</TR>

	';
			$n++;
		}

		?>

    </TABLE>
</BODY>

</HTML>