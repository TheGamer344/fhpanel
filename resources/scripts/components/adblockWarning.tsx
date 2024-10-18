import React from 'react';

const AdBlockWarning: React.FC = () => {
  return (
    <div style={styles.container}>
      <h1>Ad Blocker Detected</h1>
      <p>
        Hello visitor! We appreciate your visit. Our ads are non-intrusive and won’t disrupt your experience.
      </p>
      <p>
        By disabling your ad blocker, you help us keep our content free without affecting the service.
      </p>
      <p>Please disable your ad blocker and <a href="/">return to the main page</a> to continue using the service. Thank you!</p>
    </div>
  );
};

const styles = {
  container: {
    display: 'flex',
    flexDirection: 'column' as const, // TypeScript requires this as it's a literal type
    justifyContent: 'center' as const,
    alignItems: 'center' as const,
    height: '100vh',
    textAlign: 'center' as const,
    backgroundColor: '#f4f4f4',
    padding: '20px',
  },
};

export default AdBlockWarning;
